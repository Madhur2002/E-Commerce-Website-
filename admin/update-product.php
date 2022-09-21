<?php
    if(isset($_POST['update'])){
        $id = $_POST['id_'];
        $name=$_POST['name'];
        $details=$_POST['details'];
        $price=$_POST['price'];
        $product_image = $_FILES['imdata'];
        $image_loc = $_FILES['imdata']['tmp_name'];
        $image_name = $_FILES['imdata']['name'];
        $image_des = "Upload_image/".$image_name;
        move_uploaded_file($image_loc,"Upload_image/".$image_name);
        $category = $_POST['pages'];
        include 'dbconnect.php';
        $sql = "UPDATE `products` SET `product_name`='$name',`product_desc`='$details',`product_price`='$price',`imlocation`='$image_des ',`product_category_id`='$category' WHERE product_id=$id";
        $result = mysqli_query($conn,$sql);
        header('location:viewproducts-2.php');


    }
    ?>