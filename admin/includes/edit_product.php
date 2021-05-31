<?php 
        ob_start();
        $id = $_GET['id'];
        $product = User::show_by_id('product', $id);
        
        if(isset($_POST['update'])){
        
          $product->p_name = $_POST['p_name'];
          $product->p_price = $_POST['p_price'];
          $product->p_type = $_POST['p_type'];
          $product->p_category = $_POST['p_category'];
          $product->p_describtion = $_POST['p_describtion'];
          $product->p_image = $_FILES['p_image']['name'];
          $product->temp_file = $_FILES['p_image']['tmp_name'];

          if(move_uploaded_file($product->temp_file,'./img/products/'. $product->p_image = $_FILES['p_image']['name'])){
            
           
    
            if(empty($product->temp_file)){
              $table='product';
              $values="p_image ='$product->p_image'";
             $product->update($table, $values);
            }
            }
            

      
            
         
        
           $table = 'product';
        
           $values = "p_name = '$product->p_name', p_image = '$product->p_image', p_price = '$product->p_price', p_type = '$product->p_type', p_category = '$product->p_category', p_describtion = '$product->p_describtion'";
        
           $product->update($table, $values);

           
                            
                         
        }
    
?>

               <!-- Bar Chart -->
               <main class="admin-main">
         <div class="container pull-up">
         <div class="container py-5">
            <div class="row">

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                <i class="mdi mdi-checkbox-intermediate"></i> Edit_Product
                            </h5>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-hover ">

<form action="product.php?page=edit_product&id=<?php echo $product->id; ?>" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="title">Product Name</label>
<input type="text" value="<?php echo $product->p_name; ?>" class="form-control" name="p_name">
</div>

<div class="form-group">
<label for="title">Product Image</label>
<br>
<img  src="./img/products/<?php echo $product->p_image;?>" alt="" class="avatar-img avatar-sm rounded-circle"></div></td>
<input value="" type="file"  name="p_image">
</div>
<br>
<br>
<div class="form-group">
<label for="title">Product Price</label>
<input type="text" value="<?php echo $product->p_price; ?>" class="form-control" name="p_price">
</div>

<div class="form-group">
<label for="title">Product Type</label>
<input type="text" value="<?php echo $product->p_type; ?>" class="form-control" name="p_type">
</div>

<div class="form-group">
<label for="title">Product category</label>
<input type="text" value="<?php echo $product->p_category; ?>" class="form-control" name="p_category">
</div>

<div class="form-group">
<label for="title">Product describtion</label>
<input type="text" value="<?php echo $product->p_describtion; ?>" class="form-control" name="p_describtion">
</div>

<div class="form-group">
<input type="submit" value="Update" class="btn btn-primary" name="update">
</div>
</form>

</div>
          </div>
        </div>

