<?php
    $dsn = "mysql:host=localhost; dbname=mangadatabase";
    $dbusername ="root";
    $dbpwd="";


    try {
        $pdo = new PDO($dsn,$dbusername,$dbpwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex){
        //echo "Connection Failed: " . $ex->getMessage();
    }




