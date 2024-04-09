
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/container.css">
        <link rel="stylesheet" href="../style/product.css">
        <link rel="stylesheet" href="../style/style.css">
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
                <li><?php

                            if ($_SESSION["user-type"] == "admin"){
                                echo "<a href='./home.php'>Home</a></li>";
                            } else {
                                echo "<a href='./products.php'>Manga products</a></li>
                                <li><a href='#'>Purchase History</a></li>";
                            }                 
                ?>
                <li><a href="./clientprofile.php">Edit Profile</a></li>
                <li><a href="#">Change Password</a></li>
            </ul>
        </aside>
        

        <div  class='tile-container'>

        <div class="form-container1" style ="margin-top: -100px;">
                <form action="../php-code/changepwd.co.php" method="post" class="updateform" id='form'>
                    <div class="sign-up-log">
                        <h1>Password</h1>
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
                    
                    <div style="width:fit-content; margin-left:19%;">
                        <input type="password" id="current-password" name="current-password" placeholder="Current Password" required>
                        <br>
                        <input type="password" id="new-password" name="new-password"  Placeholder = "New Password" required>
                        <br>
                        <input type="password" id="re-type-new-password" name="re-type-new-password" placeholder="Re-Type New Password" required>
                        <br>
                    </div>
                    <div style="width:100%; height:auto; margin-top:10px;">
                        <input type="submit" value="Save" name="Submit">
                    </div>
                   
                </form>
            </div>
        </div>
        <script src="../js-code/products.co.js"></script>
        <script src="../js-code/main.js" ></script>
    </body>
</html>