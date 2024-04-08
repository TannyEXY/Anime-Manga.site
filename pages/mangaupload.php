<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manga.site</title>
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/product.css">
        <link rel="stylesheet" href="../style/inputs.css">
    </head>
    <body>
        <nav class="nav-main">
            <div class="btn-toggle-nav" onclick="toggleNav()"></div>
            <ul>
                <li>
                    
                <a href=<?php
                            session_start();
                   
                            if ($_SESSION["user-type"] == "admin"){
                                echo "'./home.php'";
                            } else {
                                echo "'./products.php'";
                            }              
                ?>>Products</a></li>
                <li style = "background-color: aliceblue;"><a href="#">Profile</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="../php-code/SsignIn.co.php">Sign Out</a></li>
            </ul>
        </nav>
        <aside class="nav-sidebar">
            <ul>
                <li>
                    <span> 
                        <?php 
                            echo $_SESSION["user-name"];
                        ?>
                    </span>
                </li>
                <li><a href="#">Edit Profile</a></li>
                <li><?php

                            if ($_SESSION["user-type"] == "admin"){
                                echo "<a href='./home.php'>Manga products</a></li>";
                            } else {
                                echo "<a href='./products.php'>Manga products</a></li>
                                <li><a href='#'>Purchase History</a></li>";
                            }                 
                ?>
                
                <li><a href="./changepassword.php">Change Password</a></li>
            </ul>
        </aside>
        <div  class='tile-container'>

            <div class="current-profile" style="height:auto;">

                <form action="../php-code/ph.co.php" method="post" enctype="multipart/form-data" class="updateform">
                    <div class="sign-up-log">
                        <h1 Style = "color:aliceblue">Manga</h1>
                        Please fill in this form to upload Manga.
                    </div>
                    <div style="width:100%">
                        <?php
                            if (isset($_SESSION['message'])){
                                echo "
                                <div style= 'color:#22f229'>
                                        ".$_SESSION['message']."
                                </div>
                                ";
                            } else if (isset($_SESSION['error'])){
                                echo "
                                <div style= 'color:bisque'>
                                        ".$_SESSION['error']."
                                </div>
                                ";
                            }
                            unset($_SESSION['error']);
                            unset($_SESSION['message']);
                            ?>
                    </div>
                    <div style="width:fit-content; margin-left:19%; text-align:left;">
                        <input type="text" name="name" placeholder="Title">
                        <textarea style = '
                        width:200px;
                        margin: 10px;
                        padding: 10px;
                        margin-bottom:20px;' name="description" placeholder="Description"></textarea>
                        <input type="text" name="price" placeholder="$12.00">
                        <input type="file" name="file"
                        style = '
                        width:200px;
                        margin: 10px;
                        padding: 10px;
                        margin-bottom:30px;
                        background-color:aliceblue; 
                        border-radius:20px;
                        color:black'>
                        <input style ="margin-left:19%;" type="submit" name="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
        <script src="../js-code/products.co.js"></script>
        <script src="../js-code/main.js" ></script>
            
</body>
</html>