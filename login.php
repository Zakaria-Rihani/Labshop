<?php
    include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body1">
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>LOGIN</h2>
                    <?php
                        if(isset($_GET['error'])) {
                                if($_GET['error'] == "emptyfields") {
                                    echo '
                                    <p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Fill all fields!</p>';
                                }
                                if($_GET['error'] == "nouser") {
                                    echo '
                                    <p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  This user does not exist!</p>';
                                }
                                else if($_GET['error'] == "wrongpwd") {
                                    echo '<p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Password Incorrect</p>';
                                }
                                else if($_GET['error'] == "loginfirst") {
                                    echo '<p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Please Login First !</p>';
                                }
                        }
                    
                    ?>
                    <form action="includes/login.inc.php" method="post">
                        <div class="inputBox">
                            <input type="text" name="mailuid" placeholder="Username">
                        </div>
                        <div class="inputBox">
                            <input type="password" name="pwd" placeholder="Password">
                        </div>
                        <div class="remember">
                            <label><input type="checkbox" name=""> Remember me</label>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="login-submit" value="login">
                        </div>
                        <p class="forget">Forgot password ?
                            <a href="#">Click Here</a>
                        </p>
                        <p class="forget">No account ?
                            <a href="signup.php">Sign up</a>
                        </p>
                    </form>
                    <h3>Login with </h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
    <!-- <div id="footerSection"></div>
    <script>
        const xhr = new XMLHttpRequest();
        const footerSection = document.getElementById('footerSection');

        xhr.onload = function() {
            if (this.status === 200) {
                footerSection.innerHTML = xhr.responseText;
            } else {
                console.warn('error');
            }
        };

        xhr.open('get', 'footer.html')
        xhr.send();
    </script> -->
    
</body>
</html>