<?php
     if (isset($_POST)){

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $usertype = $_POST["user-type"];
        $phone = $_POST["phone"];
        $dob = $_POST["dob"];

        session_start();

        require_once "./userfunctions.co.php";
        require_once "./mysql.con.php";
        require_once "./profile.qry.php";
        require_once "./dbh.con.php";
        try
        {

            echo $firstname;
            if (!($_SESSION['user-email'] == $email)){if (isEmailTaken($con, $email)){
                $_SESSION['error'] = "Failed to update. Email is taken!";
                header('Location: ../pages/edituser.php?user-id='.$_SESSION['user-id']);
                die();
                }}
            $userid = $_SESSION['user-id'];
            $result = updateUser($con,$userid,$email,$firstname,$lastname,$dob,$phone,$usertype);
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