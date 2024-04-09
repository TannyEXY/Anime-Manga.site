<?php
    session_start();
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manga.site</title>
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/product.css">
        <link rel="stylesheet" href="../style/search-bar.css">
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
                <li><a href="./clientprofile.php">Edit Profile</a></li>
                <li><a href='./home.php'>Home</a></li>
                <li><a href="./clientprofile.php">Edit Profile</a></li>
                <li><a href="./userprofiles.php">View Users</a></li>
                <li><a href="./edituser.php">Add User Profile</a></li>
                <li><a href="./mangaupload.php">Add Manga products</a></li>
                <li><a href="#">View Manga Products</a></li>
                <li><a href="./changepassword.php">Change Password</a></li>
                <li><a href="../php-code/SsignIn.co.php">Sign Out</a></li>
            </ul>
        </aside>


        <div  class='tile-container'>
            <div class="activeuser">
                

                
                    <div class="table-tile">Active Users</div>
                    <div class="frame"  
                    <?php 
                    if (isset($_SESSION['width'])){
                            echo "style ='height: 480px;'";
                            unset($_SESSION['width']);
                        }
                    ?>
                    >
                        <table border='0.1'>
                            <tr>
                                <td colspan='7' style="text-align:right;">
                                    <form action="../php-code/user.qry.php" method="post">
                                    <input type="text" name="name" class = 'search-bar' placeholder="Search">
                                    <input type="Submit" value='   '>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <?php if (isset($_SESSION['deleted'])){
                                            echo '<td colspan="7" style ="color:#009200; text-align:center;">'.$_SESSION['deleted'].'</td>';
                                            unset($_SESSION['deleted']);
                                         }
                                ?>
                            </tr>
                            <tr style="text-align:center; color:aliceblue; background-color:dodgerblue;">
                                <td style ='width:150px'>
                                    Full Name
                                </td>
                                <td style ='width:110px'>
                                    Date of Birth
                                </td>
                                <td style ='width:210px'>
                                    Email
                                </td> 
                                <td style ='width:130px'>
                                    Phone
                                </td>
                                <td style ='width:85px'>
                                    User Type
                                </td>
                                <td style ='width:50px;text-align:center'>
                                    
                                </td>
                                <td style ='width:60px'>
                                   
                                </td>                        
                            </tr>

                            <?php
                                include_once '../php-code/userfunctions.co.php';
                                include_once '../php-code/mysql.con.php';

                                if (isset($_SESSION['search-value'])){
                                    
                                    $name = $_SESSION['search-value'];
                                    createRecordRow($con, $name);
                                    unset($_SESSION['search-value']);
                                } else {
                                    createRecordRow($con, '');
                                }
                            ?>
                        </table>
                        <?php
                            if (isset($_SESSION['message'] )){
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                            } 
                          ?>

                    </div>
            </div>

        </div>
        <script src="../js-code/products.co.js"></script>
        <script src="../js-code/main.js" ></script>
            
</body>
<?php
             if (isset($_SESSION['error'])){
                echo '<script>alert ("'.$_SESSION['error'].'")</script>';
                unset($_SESSION['error']);
             }
        ?>
</html>