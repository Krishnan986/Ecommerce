<?php 

$products = User::show_all('product');

?>
         <!-- Bar Chart -->
         <main class="admin-main">
         <section class="admin-content">
         <div class="container pull-up">
         <div class="container py-5">
            <div class="row">

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                <i class="mdi mdi-checkbox-intermediate"></i> View All Products 
                            </h5>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-hover ">
                      <thead >
                          <tr>
                              
                              <th>Id</th>
                              <th>Product Name</th>
                              <th>Product Image</th>
                              <th>Product price</th>
                              <th>Product Type</th>
                              <th>Product Category</th>
                              <th>Product Describtion</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($products as $product): ?>
                       
                                <tr>
                                  <td><?php echo $product->id;?></td>
                                  <td><?php echo $product->p_name;?></td>
                                  <td><div class="avatar avatar-sm "><img  style = "width: 100px" src="./img/products/<?php echo $product->p_image;?>" alt="" class="avatar-img avatar-sm rounded-circle"></div></td>
                                  <td><?php echo $product->p_price;?></td>
                                  <td><?php echo $product->p_type;?></td>
                                  <td><?php echo $product->p_category;?></td>
                                  <td><?php echo $product->p_describtion;?></td>
                                  <td><a class="btn btn-sm btn-primary shadom-sm" href="product.php?page=edit_product&id=<?php echo $product->id;?>">Edit</a></td>
                                  <td><a class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger" href="product.php?page=delete&id=<?php echo $product->id;?>">Delete</a></td>
                                </tr>
                          
                      <?php endforeach; ?>
                      </tbody>
                  </table>
                  </form>
                  </div>
              </div>
            </div>
              
            