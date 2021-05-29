<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="body3">
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
                    <h2>SignUp</h2>
                    <?php
                        if(isset($_GET['error'])) {
                            if($_GET['error'] == "emptyfields") {
                                echo '
                                <p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Fill all fields!</p>';
                            }
                            else if($_GET['error'] == "invalidmailuid") {
                                echo '<p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Invalid username and E-mail</p>';
                            }
                            else if($_GET['error'] == "invaliduid") {
                                echo '<p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Invalid username</p>';
                            }
                            else if($_GET['error'] == "invalidmail") {
                                echo '<p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Invalid E-mail!</p>';
                            }
                            else if($_GET['error'] == "passwordcheck") {
                                echo '<p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  You password do not match!</p>';
                            }
                            else if($_GET['error'] == "usertaken") {
                                echo '<p class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Username is already taken!</p>';
                            }
                        }
                        if(isset($_GET['signup'])) {
                            if($_GET['signup'] == "seccess"){
                                echo '<p class="signupsecess" style="color: green; font-size: 17px; width: 100%; text-align: center;"><i class="fa fa-check" aria-hidden="true" style="color=green;"></i>  You have successfully signed up</p>';  
                            }
                        }
                    
                    ?>
                    <form action="includes/signup.inc.php" method="POST">
                        <div class="inputbox">
                            <input type="text" name="uid" placeholder="Username">
                        </div>
                        <div class="inputbox">
                            <input type="text" name="mail" placeholder="Your Email">
                        </div>
                        <div class="inputbox">
                            <input type="password" name="pwd" placeholder="Password">
                        </div>
                        <div class="inputbox">
                            <input type="password" name="pwd-repeat" placeholder="Confirm your Password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="signup-submit" value="Create Account">
                        </div>
                        <p class="forget">Already Have One ?
                            <a href="login.php">Login</a>
                        </p>
                        <div class="back"><a href="index.php"> Back Home</a></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
        include 'footer.php'; 
    ?>
</body>
</html>
