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
        <link rel="stylesheet" href="../style/product.css">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/inputs.css">
    </head>
    <body>
    <nav class="nav-main">
            <div class="btn-toggle-nav" onclick="toggleNav()"></div>
            <ul>
                <li>
                    
                <a href='./home.php'>Home</a></li>
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
                <li><a href='./home.php'>Home</a></li>
                <li><a href='./userprofiles.php'>User Profiles</a></li>
                <li><a href="./clientprofile.php">Edit Profile</a></li>
                <li><a href="./changepassword.php">Change Password</a></li>
            </ul>
        </aside>
        

        <div  class='tile-container'>

        <div class="form-container1" style ="margin-top: -100px;">
                
                <form action="<?php
                        if (isset($_GET['email'])){
                            echo '../php-code/updateuser.co.php';
                        }
                         else {
                            echo '../php-code/saveuser.co.php';
                         }       
                ?>" method="post" class="updateform" id='form'>
                    <div class="sign-up-log">
                        <h1 style = "color:aliceblue">USERS</h1>
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
                    
                    <?php 
                        include_once '../php-code/formcreater.co.php';

                        if (isset($_GET['email'])){
                            $_SESSION['user-id'] = $_GET['user-id'];
                            $email = $_GET['email'];
                            $_SESSION['user-email'] = $email;
                            createPopulatedForm($email);
                        }
                        else {
                            createEmptyform();
                        }                
                    ?>
                    <div style="width:100%; height:auto; margin-top:10px;">
                        <input type="submit" value="Update" name="Submit">
                    </div>
                   
                </form>
            </div>
        </div>
        <script src="../js-code/products.co.js"></script>
        <script src="../js-code/main.js" ></script>
    </body>
</html>