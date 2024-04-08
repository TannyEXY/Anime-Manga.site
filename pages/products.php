
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/product.css">
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
                        session_start();
                        echo $_SESSION["user-name"];
                    ?></span></li>
                <li><a href="./clientprofile.php">Edit Profile</a></li>
                <li><a href="#">Manga products</a></li>
                <li><a href="#">Purchase History</a></li>
                <li><a href="./changepassword.php">Change Password</a></li>
                <li><a href="../php-code/SsignIn.co.php">Sign Out</a></li>
            </ul>
        </aside>
        <div class="content" >
            <div class="tile-container">             
            <?php
                include_once "../php-code/products.qry.php";
                include_once "../php-code/mysql.con.php";
                include_once '../php-code/products.co.php';
                loadProducts($con);
            ?>
            </div>
        </div>
        <script src="../js-code/products.co.js"></script>
        <script src="../js-code/main.js" ></script>
    </body>
</html>