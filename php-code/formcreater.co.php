<?php

        function createEmptyform(){
            echo '
            <div style="width:fit-content; margin-left:19%;">
                <input type="text" name="firstname" placeholder="First name" required>
                <br>
                <input type="text"  name="lastname"  Placeholder = "Last name" required>
                <br>
                <input type="date"  name="dob" placeholder="Date of Birth" required>
                <br>
                <input type="email" name="email" placeholder="E-mail" required>
                <br>
                <input type="text" name="user-type"  Placeholder = "User type" required>
                <br>
                <input type="tel"  name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required>
                <br>
                <input type="password"  name="password" placeholder="Password" required>
        
            </div>
             ';
        }
        
        function createPopulatedForm($email){
            include_once '../php-code/mysql.con.php';
            include_once '../php-code/profile.qry.php';  

            
            $user = getuser($con,$email);
            $_SESSION['user-id'] = $_GET['user-id'];

            echo '                    
                <div style="width:fit-content; margin-left:19%;">
                    <input type="text" name="firstname"
                     placeholder="First name" value ="'.$user[0].'" required>
                    <br>
                    <input type="text"  name="lastname"  Placeholder = "Last name"
                    value ="'.$user[1].'" required>
                    <br>
                    <input type="date"  name="dob" placeholder="Date of Birth"
                    value ="'.$user[3].'" required>
                    <br>
                    <input type="email" name="email" placeholder="E-mail"
                    value ="'.$user[2].'" required>
                    <br>
                    <input type="text" name="user-type"  Placeholder = "User type" 
                    value ="'.$user[5].'" required>
                    <br>
                    <input type="tel"  name="phone" placeholder="Phone Number" 
                    value ="'.$user[4].'" pattern="[0-9]{10}" required>
                    <br>
                </div>
                    ';
            }

   
    