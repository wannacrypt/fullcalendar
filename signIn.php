<?php 
    /* Main page with two forms: sign up and log in */
    require 'db.php';
    session_start();
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
    
        <!-- Include CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title>Outlet outfits sign in</title>
    </head>

    <?php            
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            if (isset($_POST['login'])) { //user logging in
                require 'login.php';            
            }
            
            elseif (isset($_POST['register'])) { //user registering
                require 'register.php';
            }
        }                
    
    ?>

    <body>
    <section id="content">
        <div class="container">
            
            
                
            <div class="container">
                <div class="container">
                    <!-- Login -->
                    <div class="sign-in">
                        <!-- Sign in form -->
                        <h2 class="title">Sign in </h2>

                        <form action="signin.php" method="post" autocomplete="off">
                            <div class="input-container">
                                <label for="email">Email*</label>
                                <br>
                                <input type="email" required autocomplete="off" name="email" id="email">
                            </div>

                            <div class="input-container">
                                <label for="Password">Password*</label>
                                <br>
                                <input type="password" name="password" id="Password">
                            </div>
                                                        
                                                       
                            
                            <div class="button-container">
                                <button name="login"><span>Sign In</span></button>
                            </div>
                            <br>
                            <div class="forgot"><a href="forgot.php">Forgot your password?</a></div>
                            <br>

                        </form>
                    </div>

                    <!-- Registration -->
                    <div class="register">
                        <h2 class="title">Create an account</h2>

                        <form action="signin.php" method="post" autocomplete="off">
                            <div class="input-container">
                                <label for="Username">Email *</label>
                                <br>
                                <input type="email" required autocomplete="off" name='email' id="Username">
                            </div>

                            <div class="input-container">
                                <label for="Password">Password *</label>
                                <br>
                                <input type="password" id="Password">
                            </div>

                            <div class="input-container">
                                <label for="Repeat Password">Confirm Your Password *</label>
                                <br>
                                <input type="password" name='password' id="Repeat Password">
                            </div>

                            <div class="button-container">
                                <button type="submit" name="register"><span>Create an account</span></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

</html>