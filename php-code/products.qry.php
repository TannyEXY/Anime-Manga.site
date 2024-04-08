<?php

    function recordProduct($con,$name,$description,$image,$price){
        $query = "INSERT INTO manga(name,description,`image-name`,price)
                  VALUES ('$name','$description','$image',$price);";
        try {
            mysqli_query($con,$query);
            return null;
        } catch (Exception $a){
            return $a->getMessage();
        }   
    }


    function getProducts($con, $name){
        $query = "SELECT * FROM manga 
                  WHERE name like '" . $name . "%'";
        $rows = mysqli_query($con,$query);
        return $rows;
    }