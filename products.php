<?php 
ob_start();
require 'header.php';
require_once './includes/categorie.php';
require_once './includes/newdb.php'; 
$database = new CreateDb("labshop", "products");
if (isset($_POST['more'])){
  $_SESSION['family'] = $_GET['family'];
}
if (isset($_POST['add'])){
  /// print_r($_POST['product_id']);
  if(isset($_SESSION['cart'])){

      $item_array_id = array_column($_SESSION['cart'], "product_id");

      if(in_array($_POST['product_id'], $item_array_id)){
          echo "<script>alert('Product is already added in the cart..!')</script>";
          echo "<script>window.location = 'products.php'</script>";
      }else{

          $count = count($_SESSION['cart']);
          $item_array = array(
              'product_id' => $_POST['product_id']
          );

          $_SESSION['cart'][$count] = $item_array;
      }

  }else{
      $item_array = array(
              'product_id' => $_POST['product_id']
      );

      // Create new session variable
      $_SESSION['cart'][0] = $item_array;
  }
}

if (isset($_SESSION['userId'])) {
    echo"<div class=\"swiperTest\">
      <h2>" . $_SESSION['family'] . ' Products</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">';
          $results = $database->getData();
            while($row = mysqli_fetch_assoc($results)){
              if($row['genre'] == $_SESSION['family']){
                component($row['idPc'], $row['cpu'], $row['ram'], $row['stockage'], $row['display'], $row['communication'], $row['os'], $row['keyboard'], $row['name'], $row['oldprice'], number_format($row['price'], 2, '.', ' '), 'images/asuss.png');
              }
            }
      echo '</div>
      </div>
    </div>';
          }else{
            header("Location: login.php?error=loginfirst");
            exit();
            }
ob_end_flush();
?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 0,
          modifier: 1,
          slideShadows : true,
        },
        loop:  true,
      });
    </script>
<?php include 'footer.php';?>