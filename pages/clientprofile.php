<?php
    session_start();
    include_once "../php-code/mysql.con.php";
    include_once "../php-code/profile.qry.php";
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <table>
                <tr class ="data-header">
                    <td colpan="2">
                        Profile
                    </td>
                </tr>
                <?php 
                    $user = getUser($con,$email);
               ?>
                <tr>
                    <td>Name</td><td class="value"><?php echo $user[0] . ' ' . $user[1] ?></td>
                </tr>
                <tr>
                    <td>Email</td><td class="value"> <?php echo $user[2]?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td><td class="value"><?php echo $user[3]?></td>
                </tr>
                <tr>    
                    <td>Phone </td><td class="value"><?php echo $user[4]?></td>
                </tr>
                <?php
                    if (isset($_SESSION['message'])){
                        echo "<tr> <td colspan = '2' style = 'text-align:center; color: limegreen;'>". $_SESSION['message'] ."</td></tr>";
                        unset($_SESSION['message']);
                    }
                ?>
                <tr>
                    <td colspan="2" style="text-align:right;"><a href="#form"><input type="Submit" value="Edit"></a></td>
                </tr>
            </table>
        </div>
        <div class="form-container1" style ="margin-top: -100px;">
                <form action="../php-code/clientupdate.co.php" method="post" class="updateform" id='form'>
                    <div class="sign-up-log">
                        <h1>Profile</h1>
                        Please fill in this form to update profile.
                    </div>
                    <div>
                        <label for="firstName">First Name :</label><br>
                        <input type="text" id="firstName" name="firstname" required>
                        <br>
                        <label for="lastName">Last Name :</label><br>
                        <input type="text" id="lastName" name="lastname" required>
                        <br>
                        <label for="dob">Birth Date :</label><br>
                        <input type="date" id="dob" name="dob" required>
                        <br>
                        <label for="phoneNumber">Tel Number :</label><br>
                        <input type="tel" id="phoneNumber" name="phone" pattern="[0-9]{10}" required>
                        <br>
                    </div>
                    
                    <div style="width:100%; height:auto; margin-top:10px;">
                        <input type="submit" value="Update" name="Submit">
                    </div>
                   
                </form>
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