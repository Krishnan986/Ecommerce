<?php 

$id = $_GET['id'];

$user = user::show_by_id('product', $id);

if($user->delete('product')){

    header("location: product.php");
}
?>