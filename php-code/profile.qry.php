<?php
    function getUser($con,$email){
            $query = "SELECT * FROM users
            WHERE email = '".$email."'";
            $rows = mysqli_query($con,$query);
            foreach($rows as $row):
                $user = array($row["firstname"],$row["lastname"],$row["email"],$row["dob"],$row["phone"],$row['usertype']);
                return $user;
            endforeach;
        }


        function updateProfile($con,$email,$firsname,$lastname,$dob,$phone){
            include_once "../php-code/mysql.con.php";
            $query = "UPDATE users SET firstname ='$firsname' ,lastname ='$lastname', dob = '$dob',phone ='$phone'
            WHERE email = '".$email."'";
            try{
                mysqli_query($con,$query);
                return null;
            } 
            catch (Exception $e){
                return $e->getMessage();
            }
        }


        function ispwcorrect($con,$email, $pass){
            $query = "SELECT * FROM users
            WHERE email = '".$email."'";
            $rows = mysqli_query($con,$query);
            foreach($rows as $row):
                $pwd = $row["password"];
                if ($pwd == $pass){
                    return true;
                }
            endforeach;
            return false;
        }

        function updatePassword($con,$email,$pass){
            $query = "UPDATE users SET password ='$pass'
            WHERE email = '".$email."'";
            try{
                mysqli_query($con,$query);
                return null;
            } 
            catch (Exception $e){
                return $e->getMessage();
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
        