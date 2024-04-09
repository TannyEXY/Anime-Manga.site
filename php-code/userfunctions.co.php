<?php

    function deleteUser($con,$userid){
        $query = "DELETE FROM users WHERE userid = '$userid'";
        mysqli_query($con,$query);
    }

    function createuser($con, $firstnme , $lastname, $email, $dob, $phone, $pwd, $usertype){
        $query = "INSERT INTO users(firstname,lastname,email,dob,phone,`password`,usertype) 
        VALUES ('$firstnme' , '$lastname', '$email', '$dob', '$phone', '$pwd', '$usertype');";
        
        try {
            mysqli_query($con,$query);
            return "Successfully Saved!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }


    function updateUser($con,$userid, $email,$firstname,$lastname,$dob,$phone,$usertype){

        $query = "UPDATE users SET lastname ='$lastname',firstname ='$firstname', dob = '$dob',phone ='$phone', 
        email = '$email', usertype = '$usertype'
        WHERE userid = '".$userid."'";

        try{
            mysqli_query($con,$query);
            return 'Update Successful!';
        } 
        catch (Exception $e){
            return $e->getMessage();
        }
    }


    function getusers($con, $name){
        $names = explode(" ",$name);
        $query = '';
        if(count($names) == 2){
            $query = "SELECT * FROM users WHERE firstname like '$names[0]%' and lastname like '$names[1]%'";
        } else {
            $query = "SELECT * FROM users WHERE firstname like '$names[0]%'";
        }
        
        $rows = mysqli_query($con,$query);

        return $rows;
    }


    function createRecordRow($con, $name){
        $rows = getusers($con,$name);
        $count = 0;
        foreach($rows as $row):
            $count++;
            echo "<tr> <td>".
                $row['firstname']." ".$row['lastname']."
                </td>
                <td>
                    ".$row['dob']."
                </td>
                <td>
                    ".$row['email']."
                </td>
                <td>
                    ".$row['phone']."
                </td>
                <td>
                    ".$row['usertype']."
                </td>
                
                <td style = 'width:50px;text-align:center'>
                    <a href='../pages/edituser.php?user-id=".$row['userid']."&email=".$row['email']."'>Edit</a>
                </td>
                <td style = 'width:50px;text-align:center'>
                    <a href='../php-code/userdel.co.php?user-id=".$row['userid']."'>Delete</a>
                </td><tr>";
        endforeach;
        if (!$count > 0){
            $_SESSION['message'] = "<div style ='margin-top:100px;font-size:40px; font-weight:bold;
                                    color:coral; text-align:center;'>No search result!!</div>";
        }
        if ($count <= 9){
            $_SESSION['width'] = "style ='height: 550px;'";
        }
        
    }

    