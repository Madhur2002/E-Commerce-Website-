<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Products</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        .center
        {
            margin:auto;
            margin-top:450px;
            top:50%;
            left:50%;
            width:400px;        
        }
        
        input
        {
            margin:20px 0 20px 0;
        }
        .margin{
            margin-top:650px;
            height:100%;
        }
    </style>
</head>
<body>
<?php
include 'dbconnect.php';
$id = $_GET['pid'];

$result = mysqli_query($conn,"SELECT * FROM `products` WHERE product_id=$id");
$row = mysqli_fetch_array($result);
?>

    <div class="center">

        <form enctype=multipart/form-data class="bg-secondary w-100 p-4 text-center" method="POST" action="update-product.php">

            <h3 class="text-white">Product Update</h3>

            <input required autocomplete="off" value="<?php echo $row['product_name']; ?>" class="form-control text-danger" name="name" placeholder="Product Name">

            <textarea required class="form-control" value="<?php echo $row['product_desc'];?>" name="details" rows="4" placeholder="Product details..."></textarea>
            
            <input required class="form-control" value="<?php echo $row['product_price'];?>" name="price"  placeholder="Product Price" type="number">

            <input required class="form-control" name="imdata" type="file" ><br>
            <img src="<?php echo $row['imlocation'];?>" height=25px;>

            
            <div class="mb-3">
                <label class="form-control">Select Product Category</label>
                <select class="form-select" name="pages">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <input type="hidden" name="id_" value="<?php echo $row['product_id'];?>">
            <div class="text-center">
                <button class=" btn btn-danger form-control text-white my-3" name="update">UPDATE</button> 
            </div>
        </form>
    </div>
    

</body>
</html>

