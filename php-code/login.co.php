<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    include './config.sesssion.co.php';
    include "./mysql.con.php";
    include_once "./dbcontrol.co.php";
    include "./errors.co.php";

    if (isset($_POST['email']) && isset($_POST['password'])){
        $email = validate($_POST['email']);
        $pass = validate($_POST['password']);

        if (empty($email) || empty($pass)){
            header("Location: ../index.php?error=fill in all fields!!");
            die();
        } 
        else {
            $result = checkUserExistance($con,$email,$pass);
            if (!($result == "user is not registered !") && !($result == "incorrect password!!")){
                $_SESSION["user-name"] = $result;
                $_SESSION["email"] = $email;
                
                if ($_SESSION["user-type"] == "client"){
                    header("Location: ../pages/products.php");
                    die();
                } else {
                    header("Location: ../pages/home.php");
                    die();
                }
                

            } else if ($result == "incorrect password!!"){
                header("Location: ../index.php?error=" . $result);
                die();
            }
            else {
                header("Location: ../index.php?error=" . $result);
                die();
            }    
        }
    }

}
else {
   header('Location: ../index.php');
   die();
}