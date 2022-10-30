<?php 
session_start();
// session_destroy();
if (!isset($_SESSION['pseudo'])) {
   header('Location: login.php');
   die();
}
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php 

        //Si la session existe je boucle sur le tableau pour afficher le nom des produits
        if (isset($_SESSION['name_product'])){           
            $products = $_SESSION['name_product'];      
            
            foreach ($products as $product => $name) {
              echo $name . ' <br>';
            }
        }
        ?>        
    </div>
</section>
<?php require 'inc/foot.php'; ?>
