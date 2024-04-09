<?php
    session_start();
    
    if (isset($_POST['name'])){
        $srchValue = $_POST['name'];
        $_SESSION['search-value'] = $srchValue;
        header("Location: ../pages/userprofiles.php");
        die();
    }
