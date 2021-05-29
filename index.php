<?php 
include 'header.php';
require_once './includes/categorie.php';
require_once './includes/newdb.php'; 
$database = new CreateDb("labshop", "categorie");

?>

    <div class="gender" >
        <h3>Catégories</h3>
    </div>
    <main>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="container1">
        <?php 
         $result = $database->getData();
         while($row = mysqli_fetch_assoc($result)){
            categorie($row['family'], $row['id'], $row['descript'], $row['src_image']);  
         }
       
        ?>  
           
        </div>
    </main>
    <?php
        include 'footer.php';
    ?>
    