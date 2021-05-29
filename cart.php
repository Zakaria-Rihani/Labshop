<?php 
require_once './includes/newdb.php'; 
require_once './includes/categorie.php';

$database = new CreateDb("labshop", "products");

if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
  }
?>
<div class="titlepanier">
    <h2 class="mypanier"> My Panier</h2>
</div>
<div class="fullpanier">
    <div class="cadrepanier">
    <?php
        $total = 0;
        if (isset($_SESSION['cart'])){
            $product_id = array_column($_SESSION['cart'], 'product_id');
            $results = $database->getData();
            while ($row = mysqli_fetch_assoc($results)){
                foreach ($product_id as $id){
                    if ($row['idPc'] == $id){
                        cartElement($row['name'], number_format($row['price'], 2, '.', ' '), $row['idPc'], 'images/asuss.png');
                        $total = $total + (int)$row['price'];
                    }
                }
            }
        }else{
            echo "<h5>Cart is Empty</h5>";
        }

        ?>
    </div>
    <div class="facture">
        <div class="detailproduct">
            <h3>Price Details:</h3>
        </div>
        <div class="price">
            <h4>Total Price : <?php echo $total;?> Dh</h4>
            <h4>Delivery Charges: Free</h4>
            <h4 class="ttc">Amount Payable: <?php echo $total;?> Dh</h4>
        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>