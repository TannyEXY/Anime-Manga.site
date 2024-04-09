<?php
    if (isset($_GET['user-id'])){
        session_start();
        include './mysql.con.php';
        include './userfunctions.co.php';

        $userid = $_GET['user-id'];
        deleteUser($con,$userid);
        $_SESSION['deleted'] = 'User Deleted Successfully!';

        header("Location: ../pages/userprofiles.php");;
    } else {
        header("Location: ../pages/userprofiles.php");;
    }
    