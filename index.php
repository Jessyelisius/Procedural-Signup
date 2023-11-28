<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <h3>
                        <?php
                        output_username();
                        ?>
                    <h3>

                    <?php
                            if(!isset($_SESSION['user_id'])){?>
                            
                            <header>Login</header>
                        <form action="includes/login.inc.php" method="post">
                            <div class="field input-field">
                                <input type="text" name="username" placeholder="Username" class="input">
                            </div>

                            <div class="field input-field">
                                <input type="password" name="pwd" placeholder="Password" class="password">
                                <i class='bx bx-hide eye-icon'></i>
                            </div>

                            <div class="form-link">
                                <a href="#" class="forgot-pass">Forgot password?</a>
                            </div>

                            <div class="field button-field">
                                <button type="submit" name="submit">Login</button>
                            </div>
                        </form>

                        <?php
                            check_login_errors();
                        ?>

                        <div class="form-link">
                            <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="media-options">
                        <a href="#" class="field facebook">
                            <i class='bx bxl-facebook facebook-icon'></i>
                            <span>Login with Facebook</span>
                        </a>
                    </div>

                    <div class="media-options">
                        <a href="#" class="field google">
                            <img src="images/google.png" alt="" class="google-img">
                            <span>Login with Google</span>
                        </a>
                    </div>

                </div>   
                        
            
            <?php }?>
                    

            <!-- Signup Form -->



            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="includes/signup.inc.php" method="post">
                        <?php
                            signup_inputs()
                        ?>

                        <div class="field button-field">
                            <button type="submit" name="submit">Signup</button>
                        </div>
                    </form>
                        <?php
                            check_signup_error();
                        ?>
                    <div class="form-link">
                        <span>Already have an account? <a href="index.php" class="link login-link">Login</a></span>
                    </div>
                <form action="includes/logout.inc.php" method="post">
                        <div class="field button-field">
                            <button>Logout</button>
                        </div>
                </form>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>
        </section>

        <!-- JavaScript -->
        <script src="js/script.js"></script>
    </body>
</html>