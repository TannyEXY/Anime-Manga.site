<?php
    session_start();
    include './php-code/config.sesssion.co.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style/nav-style.css">
        <link rel="stylesheet" href="./style/container.css">
        <link rel="stylesheet" href="./style/form.css">
        <link rel="stylesheet" href="./style/inputs.css">
    </head>
    <body>
        <nav class="nav-bar">
            <div class="site-name">
               <img src="./image/rogue2.jpeg" alt=""> Manga.Site
            </div>
            <a href="./pages/signup.php"><button class="sign-up">Sign Up</button></a>
        </nav>
        <div class="usersignup">

        </div>
        <div class="container">
            <div class="site-description">
                <div class="content">
                    <p class="manga">Manga</p>
                    <div class="paragraph">
                        <h3>What is Manga?</h3>
                        <p>
                        Manga, a quintessential Japanese art form, transcends mere comic books.
                        Originating in the late 19th century, it now spans a vast array of genres:
                        romance, action, comedy, fantasy, and more. Manga is not confined to a single 
                        style; rather, it encompasses diverse storytelling techniques and iconic characters. 
                        These serialized works are released chapter-by-chapter, often weekly or monthly, 
                        in Japan. Popular series are compiled into tankōbon volumes, available in both 
                        hardcover and softcover formats. The art style is distinct, characterized by 
                        emotionally realistic characters, intricate scenes, and a fusion of Japanese tradition 
                        with modernity. In essence, manga is a captivating blend of visual storytelling, 
                        cultural expression, and artistic innovation1
                        </p>
                        <button>Read more</button>
                    </div>
                    
                </div>
                <div class="button">
                    <a href="#sign-in"><button>Sign-in</button></a>
                </div>  
            </div>



            <div class="form-container" id="sign-in">
                

                <form action="./php-code/login.co.php" method="post" class="form" id='form'>
                    <div class="sign-in-label">
                        Sign In
                    </div>
                    <div class="session">
                       <?php
                            if (isset($_GET['error'])) { 
                                echo "<p>" .$_GET['error'] . "</p>";
                            }
                        ?>
                    </div>    
                    <div class="text-elements">
                        <input type="email" placeholder="email" name="email" required><br>
                        <input type="password" placeholder="password" name="password" required>
                    </div>
                    <div class="sign-in">
                        <input type="submit" value="Sign in"><br>
                        <em>Forgot password?</em>
                        <div class="social-list">
                            <ul>
                                <li><a href="#"><img src="./image/facebook.png" alt="icon" class="icon">facebook</a></li>
                                <li><a href="#"><img src="./image/whatsapp.png" alt="icon" class="icon">Whatsapp</a></li>
                                <li><a href=""><img src="./image/telegram.png" alt="icon" class="icon">Telegram</a></li>
                            
                            </ul>
                        </div>
                        
                    </div>
                </form>



            </div> 
        </div>
        <script src="./js-code/script.js"></script>
        <?php
            if (isset($_GET['message'])){
                echo '<script>alert("' . $_GET['message'] . '")</script>';
            }   
        ?>
    </body>
</html>