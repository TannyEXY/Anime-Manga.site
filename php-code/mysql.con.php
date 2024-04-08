<?php
     $ds_name = "localhost";
     $db_name= "mangadatabase";
     $dsname ="root";
     $dspwd="";

     $con = mysqli_connect($ds_name,$dsname,$dspwd,$db_name);

     if (!$con){
        die("Failed to connect to database !!!");
     }