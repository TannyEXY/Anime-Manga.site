<?php
        if (isset($_POST['Submit'])){
            session_start();
            include_once "../php-code/mysql.con.php";
            include_once "../php-code/errors.co.php";
            include_once "../php-code/profile.qry.php";

            $email = $_SESSION["email"];
            $firsname = $_POST["firstname"];
            $lastname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $phone = $_POST['phone'];

            $firsname = validate($firsname);
            $lastname = validate($lastname);
            $dob = validate($dob);
            $phone = validate($phone);

            $result = updateProfile($con,$email,$firsname,$lastname,$dob,$phone);

            if ($result === null){
                $_SESSION['message'] = 'profile updated';
                if ($_SESSION['user-type'] == 'admin'){
                    header("Location: ../pages/adminusers.php");
                    die();
                }                
                header("Location: ../pages/clientprofile.php");
                die();
            } else {
                $_SESSION['error'] = 'profile update Failed: ' . $result;
                if ($_SESSION['user-type'] == 'admin'){
                    header("Location: ../pages/adminusers.php");
                    die();
                }
                header("Location: ../pages/clientprofile.php");
              
                die();
            }

        }