<?php
    include "./php-code/config.sesssion.co.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/nav-style.css">
        <link rel="stylesheet" href="../style/container.css">
        <link rel="stylesheet" href="../style/signupform.css">
        <link rel="stylesheet" href="../style/inputs.css">
    </head>
    <body>
        <nav class="nav-bar">
            <div class="site-name">
             <div>
                <a href="../php-code/SsignIn.co.php" title="Click here to go to Sign in Page" class="site-link">
                    <img src="../image/rogue2.jpeg" alt="">Manga.Site
                </a>
             </div>
            </div>
        </nav>
        <div style="height: 150px; width:100%;">
        </div>
        <div class="form-container" style ="margin-top: -100px;">
                <form class="form" action="../php-code/control.co.php" method="post">
                    <div class="sign-up-log">
                        <h1>Sign Up</h1>
                        Please fill in this form to create an account.
                    </div>
                    <label for="firstName">First Name :</label><br>
                    <input type="text" id="firstName" name="firstname" required>
                    <br>
                    <label for="lastName">Last Name :</label><br>
                    <input type="text" id="lastName" name="lastname" required>
                    <br>
                    <label for="dob">Date of Birth :</label><br>
                    <input type="date" id="dob" name="dob" required>
                    <br>
                    <label for="phoneNumber">Phone :</label><br>
                    <input type="tel" id="phoneNumber" name="phone" pattern="[0-9]{10}" required>
                    <br>
                    <label for="email">E - mail :</label><br>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="cofirm_Email">Confirm Email :</label><br>
                    <input type="email" id="confirm_Email" name="confirm-email" required>
                    <br>
                    <br>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <label for="confirm-password">Confirm Password</label><br>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    <br>
                    <div class="confirmation">
                    <div  class='session'  style="margin-bottom:auto; padding:5px;">
                        <label style='color: rgb(237 26 26);'>
                            <?php
                                    if (isset($_GET['message'])){
                                        echo  $_GET['message'];
                                    }
                                ?>
                        </label>
                    </div>
                        <label>
                            <input type="checkbox" name="terms" required>
                            I accept the <a href="#">Terms & Privacy</a>.
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="mailingList">Add me to the mailing list.
                        </label>
                       
                    </div>
                    <div style="width:100%; height:auto;">
                        <input type="submit" value="Sign Up">
                    </div>
                   
                </form>
            </div>
        <script src=""></script>
    </body>
</html>