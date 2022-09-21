<?php

include 'dbconnect.php';

$name=$_POST['name'];
$details=$_POST['details'];
$price=$_POST['price'];
$product_image = $_FILES['imdata'];
$image_loc = $_FILES['imdata']['tmp_name'];
$image_name = $_FILES['imdata']['name'];
$image_des = "Upload_image/".$image_name;
move_uploaded_file($image_loc,"Upload_image/".$image_name);
$category = $_POST['pages'];
// echo $category;
$sql="insert into products(product_name,product_desc,product_price,imlocation,product_category_id) values('$name','$details',$price,'$image_des',$category)";
$res=mysqli_query($conn,$sql);
if($res)
{    
    header('location:viewproducts-2.php');
}