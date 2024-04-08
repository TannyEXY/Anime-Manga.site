<?php
    if (isset($_POST["Submit"])){
        $current_pwd = $_POST["current-password"];
        $new_pwd = $_POST["new-password"];
        $re_new_pwd = $_POST["re-type-new-password"];

        include_once "./errors.co.php";
        require_once "./mysql.con.php";
        include_once "./profile.qry.php";

        $current_pwd =  validate($current_pwd);
        $new_pwd= validate($new_pwd);
        $re_new_pwd = validate($re_new_pwd);
        
        session_start();
        $email = $_SESSION["email"];
        
        if (ispwcorrect($con,$email, $current_pwd)){
            if ($new_pwd == $re_new_pwd){
                updatePassword($con,$email,$new_pwd);
                $_SESSION['message'] = 'Password successfully changed.';
                header("Location: ../pages/changepassword.php");

            }
            else {
                $_SESSION['error'] = "Passwords do not match";
                header("Location: ../pages/changepassword.php");
            }

            } 
        else 
            {
                $_SESSION['error'] = "Current password is incorrect";
                header("Location: ../pages/changepassword.php");
             }

        

    }