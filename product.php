<?php ob_start();
      include 'includes/header.php'; ?>
      <br>
<?php include 'includes/sidebar.php'; ?>
      <br>
<?php include 'includes/nav.php'; ?>

<?php include 'includes/main.php'; ?>
      <br> 
      <?php include 'includes/db.php'; ?>
      <br> 
      <?php include 'includes/product.php'; ?>
      <br>           
      
      
      
      <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php

                if(isset($_GET['page'])){

                  $page = $_GET['page'];
                  
                } else {
                  $page ='';
                }

                 switch($page) {
                 
                  case 'add_product';
                  include 'includes/add_product.php';
                  break;

                  case 'delete';
                  include 'includes/delete_product.php';
                  break;

                  case 'edit_product';
                  include 'includes/edit_product.php';
                  break;

                  case 'view';
                  include 'includes/view_all_product.php';
                  break;

                  default:
                  include 'includes/view_all_product.php';
                  break;

                 } 
                ?>
            </div>
      <!-- End of Main Content -->

      <?php include 'includes/footer.php'; ?>