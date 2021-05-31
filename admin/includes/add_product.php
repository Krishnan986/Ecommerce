<?php 
        
        if(isset($_POST['add'])){

            
            $products = new User;
            $products->p_name = $_POST['p_name'];
            $products->p_price = $_POST['p_price'];
            $products->p_type = $_POST['p_type'];
            $products->p_category = $_POST['p_category'];
            $products->p_describtion = $_POST['p_describtion'];
            $products->p_image = $_FILES['p_image']['name'];
            $products->temp_file = $_FILES['p_image']['tmp_name'];
            if(!empty($products->temp_file)){

            move_uploaded_file($products->temp_file,'./img/products/'. $products->p_image = $_FILES['p_image']['name']);
    
    
           }       

            $table = 'product';

            $fields = "p_name, p_image, p_price, p_type, p_category, p_describtion";

            $values = "'$products->p_name', '$products->p_image', '$products->p_price',  '$products->p_type', '$products->p_category', '$products->p_describtion'";

            if($products->create($table,$fields,$values)){

                header("location: product.php?page=add_product");
            }
            
                         
            
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
                                <i class="mdi mdi-checkbox-intermediate"></i> Add_Product
                            </h5>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-hover ">

<form action="product.php?page=add_product" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="title">Product Name</label>
<input type="text" value="" class="form-control" name="p_name">
</div>

<div class="form-group">
<label for="title">Product Image</label>
<br>
<input type="file" value="" name="p_image">
</div>

<div class="form-group">
<label for="title">Product Price</label>
<input type="text" value="" class="form-control" name="p_price">
</div>

<div class="form-group">
<label for="title">Product Type</label>
<input type="text" value="" class="form-control" name="p_type">
</div>

<div class="form-group">
<label for="title">Product Category</label>
<input type="text" value="" class="form-control" name="p_category">
</div>

<div class="form-group">
<label for="title">Product decribtion</label>
<input type="text" value="" class="form-control" name="p_describtion">
</div>

<div class="form-group">
<input type="submit" value="Upload" class="btn btn-primary" name="add">
</div>
</form>

</div>
          </div>
        </div>
        </div>

