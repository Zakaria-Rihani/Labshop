<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body1">
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="circle" style="--i:0;"></div>
            <div class="circle" style="--i:1;"></div>
            <div class="circle" style="--i:2;"></div>
            <div class="circle" style="--i:3;"></div>
            <div class="circle" style="--i:4;"></div>
            <div class="container">
                <div class="form-contact">
                    <h2>
                        Send Us A Message
                    </h2>
                    <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill all fields! ";
                                echo '<div class="signuperror"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    <form class="contact-us" action="includes/contactus.inc.php" method="post">
                    
                        <div class="input10" data-validate="Please enter your name">
                            <input class="input100" type="text" name="UName" placeholder="Username">
                        </div>

                        <div class="input10" data-validate = "Please enter your email: e@a.x">
                            <input class="input100" type="text" name="Email" placeholder="E-mail">
                        </div>
        
                        <div class="input10" data-validate = "Subject">
                            <input class="input100" type="text" name="Subject" placeholder="Subject">
                        </div>
        
                        <div class="input10" data-validate = "Please enter your message">
                            <textarea class="input100" name="msg" placeholder="Your Message"></textarea>
                        </div>
        
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn" name="btn-send">
                                <span>
                                    <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                                    Send
                                </span>
                            </button>
                        </div>
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