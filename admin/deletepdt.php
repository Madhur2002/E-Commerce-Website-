<?php

include 'dbconnect.php';


$product_id = $_GET['pid'];
$sql = "delete from `products` where product_id=$product_id";
$result = mysqli_query($conn,$sql);

if($result){
    header('location:viewProducts-2.php');
}


?>
