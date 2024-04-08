<?php
    if (isset($_POST['submit'])){

            $file = $_FILES['file'];
            $filename = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
    
            $fileExt = explode(".",$filename);
            $fileActualExt = strtolower(end($fileExt));
    
            $allowed = array('jpg','jpeg', 'png');
            session_start();
    
            if (in_array($fileActualExt,$allowed)){
                if ($fileError === 0){
                    if ($fileSize < 500000000){
                        $fileNameNew = uniqid('',true);
                        $fileNameNew .= "." . $fileActualExt;
                        $fileDestination = '../uploads/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);
                        
                        include_once "./errors.co.php";
                        require_once "./mysql.con.php";
                        include_once "./products.qry.php";

                        $name = $_POST["name"];
                        $description = $_POST["description"];
                        $price = $_POST['price'];

                        validate($name);
                        validate($description);
                        validate($price);

                        $erro = recordProduct($con,$name,$description,$fileNameNew,$price);
                        $_SESSION['message'] = "upload success";
                    
                        header("Location: ../pages/mangaupload.php?message=upload success");
                        die();
                        
                    }
                    else {
                        $_SESSION['error'] ="file is too big";
                        header("Location: ../pages/mangaupload.php");
                        die();
                    }
                }else 
                 { 
                    $_SESSION['error']  = "You cannot upload files of this type!";
                    header("Location: ../pages/mangaupload.php");
                    die();
                }
            }
            else 
            { 
                $_SESSION['error']  = "You cannot upload files of this type!";
                header("Location: ../pages/mangaupload.php");
                die();
            }
        }