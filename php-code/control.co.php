<?php   
    // sign-up form handler
    // recording a new user
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstnme = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $email2 = $_POST["confirm-email"];
        $phone = $_POST["phone"];
        $dob = $_POST["dob"];
        $pwd1 = $_POST['password'];
        $pwd2 = $_POST['confirm-password'];
        if ($pwd1 == $pwd2 && $email2 == $email){

            try 
                {
                    require_once "./dbcontrol.co.php";
                    require_once "./mysql.con.php";

                    if (isEmailTaken($con, $email)){
                        header('Location: ../pages/signup.php?message=email is already taken!');
                        die();
                    }
                    $con = null;
                   
                    require_once "./dbh.con.php";

                    createUser($pdo,$firstnme , $lastname, $email, $dob, $phone, $pwd1);
                    $pdo= null;
                    $stmt=null;
                    header("Location: ../index.php?message=User successfully sign up, you can now sign in.");
                    die();
                }
            catch (PDOException $e)
                {
                    die("Query Failed: " . $e->getMessage());

                }

        } else {
            header('Location: ../pages/signup.php?message=password or emails do not match!!');
            die();
        }
    }
     else {
        header('Location: ../pages/signup.php');
        die();
     }
