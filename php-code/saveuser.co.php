<?php
     if (isset($_POST)){
        $firstnme = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $usertype = $_POST["user-type"];
        $phone = $_POST["phone"];
        $dob = $_POST["dob"];
        $pwd = $_POST['password'];

        session_start();
        require_once "./userfunctions.co.php";
        require_once "./mysql.con.php";
        require_once "./profile.qry.php";
        require_once "./dbh.con.php";
        
        try
        {   
                    if (isEmailTaken($con, $email)){
                        $_SESSION['error'] = "Failed to update. Email is taken!";
                        header('Location: ../pages/edituser.php?user-id='.$_SESSION['user-id']);
                        die();
                        }
                
            $userid = $_SESSION['user-id'];
            $result = createuser($con, $firstnme , $lastname, $email, $dob, $phone, $pwd, $usertype);
            if ($result == "Update Successful!"){
                $_SESSION['message'] = $result;
                header("Location: ../pages/edituser.php");
                die();

            } else {
                $_SESSION['error'] = $result;
                header("Location: ../pages/edituser.php");
                die();
            }

        } catch(Exception $e){
            $_SESSION['error'] = $e->getMessage();
            header("Location: ../pages/edituser.php");
            die();
        }
     }