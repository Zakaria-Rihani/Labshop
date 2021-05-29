<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="js/master.js"></script>
</head>
<body class="body1">
    <section class="headerr">
        <header>
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<a href="index.php" class="logo"><i class="fa fa-shopping-basket"></i>LabShop</a>
                <input type="checkbox"  id="inpNavToggle">
                <label class="bar__nav-toggle" for="inpNavToggle"><div class="material-icons"></div></label>            
                    <div class="" id="navbarNavAltMarkup">
                        <div class="panierclass">
                            <a href="cart.php" class="panier">
                                <h5 class="px-5 cart">
                                    <i class="fa fa-shopping-cart"></i> Panier';
                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"nbrpanier\">$count</span>";
                            }else{
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }
                            echo '      </h5>
                                    </a>
                                </div>
                            </div>
                    <div class="action">
                        <div class="profile" onclick="menuToggle();">
                            <img src="images/person1.svg" alt="">
                        </div>
                    <div class="profilMenu">
                        <h3>'; echo 'Welcome <span>'. $_SESSION['userUid']. '</span></h3>
                        <ul>
                            <li class="lipanier">
                                <div class="" id="navbarNavAltMarkup">
                                    <div class="panier1class">
                                        <a href="cart.php" class="panier">
                                            <h5 class="px-5 cart">
                                                <i class="fa fa-shopping-cart"></i> Panier';
                                        if (isset($_SESSION['cart'])){
                                            $count = count($_SESSION['cart']);
                                            echo "<span id=\"cart_count\" class=\"nbrpanier\">$count</span>";
                                        }else{
                                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                        }
                                        echo '      </h5>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li><img src="images/user.png" alt=""><a href="#">My profile</a></li>
                            <li><img src="images/edit.png" alt=""><a href="#">Edit Profile</a></li>
                            <li><img src="images/settings.png" alt=""><a href="#">Settings</a></li>
                            <li><img src="images/question.png" alt=""><a href="contact.php">Contact Us</a></li>
                            <li><img src="images/log-out.png" alt="">
                                <form action="includes/logout.inc.php" method="post">
                                    <button class="logout" type="submit" name="logout-submit">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>';
            }
            else {
                echo ' <a href="index.php" class="logo"><i class="fa fa-shopping-basket"></i>LabShop</a>
                <input type="checkbox"  id="inpNavToggle">
                <label class="bar__nav-toggle" for="inpNavToggle"><div class="material-icons"></div></label>            
                <div class="navigation">
                    <a href="index.php" class="active">Home</a>
                    <a href="login.php">LogIn</a>
                    <a href="team.php">Our Team</a>
                    <a href="contact.php" >Contact Us</a>
                </div>';
            }
        ?>
        </header>
    </section>