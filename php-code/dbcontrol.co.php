<?php

    function getUser(object $pdo,string $email,string $pwd){
        $query = "SELECT `password` FROM  users
                  WHERE email = '".$email."' and password ='".$pwd."';";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    function createUser(object $pdo, string $firstnme, string $lastname, string $email,string $dob,string $phone,string $pwd1){
        $query = "INSERT INTO users(firstname,lastname,email,dob,phone,`password`,usertype) 
        VALUES (?,?,?,?,?,?,'client');";
        $stmt = $pdo->prepare($query);
        $stmt->execute([ $firstnme , $lastname, $email, $dob, $phone, $pwd1]);
    }


    function isUserInDatabase($pdo,$email,$pwd){
        if (getUser($pdo, $email, $pwd) == true){
            return true;
        } else {
            return false;
        }
    }


    function checkUserExistance($con,$email, $pwd){
        $query = "SELECT * FROM  users WHERE email = '$email'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) === 1){
            if ($row['password'] === $pwd){
                $_SESSION["user-type"] =$row["usertype"];
                $_SESSION["email"] =$email;
                return $row['firstname'] .' '. $row['lastname'];
            }
            else {
                return "incorrect password!!";
            }
            } 
        else {
            return "user is not registered !";
            }
    }

    function isEmailTaken($con,$email){
        $query = "SELECT * FROM  users WHERE email = '$email'";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) === 1){
            return true;
        }
        return false;
    }