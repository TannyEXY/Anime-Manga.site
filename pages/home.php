<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/container.css">
        <link rel="stylesheet" href="../style/form.css">
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
         <nav class="nav-main">
            <div class="btn-toggle-nav" onclick="toggleNav()"></div>
            <ul>
                <li style = 'background-color:aliceblue;'><a href="#">Products</a></li>
                <li><a href="./clientprofile.php">Profile</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="../php-code/SsignIn.co.php">Sign Out</a></li>
            </ul>
        </nav>
        <aside class="nav-sidebar">
            <ul>
                <li><span> <?php
                        echo $_SESSION["user-name"];
                    ?></span></li>
                <li><a href="./clientprofile.php">Edit Profile</a></li>
                <li><a href="./userprofiles.php">View Users</a></li>
                <li><a href="./edituser.php">Add User Profile</a></li>
                <li><a href="./mangaupload.php">Add Manga products</a></li>
                <li><a href="#">View Manga Products</a></li>
                <li><a href="./changepassword.php">Change Password</a></li>
                <li><a href="../php-code/SsignIn.co.php">Sign Out</a></li>
            </ul>
        </aside>
        <div class="container" style="padding: 100px;">
            <?php
                echo "hello " . $_SESSION["user-name"];
            ?>
        </div>
        <div class="contact-us" id="">
       
        </div>
        <script src="" async defer></script>

        <script src="../js-code/products.co.js"></script>
        <script src="../js-code/main.js" ></script>
    </body>
</html>