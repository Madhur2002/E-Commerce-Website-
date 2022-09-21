<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f15fbc3514.js" crossorigin="anonymous"></script>
    <style>
    ._width {
        width: 300px;
        height: 100px;
    }

    ._font {
        font-family: Snell Roundhand, cursive;
    }
    </style>
</head>

<body>
    <?php
      include 'partials/header.php';
      include 'admin/dbconnect.php';
      $id = $_GET['catid'];
    ?>
    <?php
    $sql = "SELECT * FROM `categories_ecommerce` WHERE caterory_id=$id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $_name=$row['category_name'];
        echo '
        <div class="alert alert-info" role="alert">
            <h4 class="h4 text-center _font">'.$_name.' Shopping Category</h4>
        </div>
        ';
    }


    ?>
    <!-- <div class="container my-3">
        <div class="row"> -->
    <div class="card-deck">
        <?php
                $sql = "SELECT * FROM `products` WHERE product_category_id=$id";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $_img=$row['imlocation'];
                    $_name=$row['product_name'];
                    $_price=$row['product_price'];
                    $_desc=$row['product_desc'];
                    echo '
                    <div class="col-md-3 m-auto">
                        <form action="InsertCart.php" method="POST">
                            <div class="card m-auto _width">
                                <img height=250px; width=95px; class="card-img-top" src="admin/'.$_img.'" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-danger"><a href="">'.$_name.'</a></h5>
                                    <p class="card-text">'.$_desc.'</p>
                                </div>
                                <div class="card-footer text-center">
                                    <h3 class="card-text font-weight-bold"><i class="fa-solid fa-indian-rupee-sign"></i>'.$_price.'</h3>
                                    <input type="hidden" name="PName" value="'.$_name.'">
                                    <input type="hidden" name="PPrice" value="'.$_price.'">
                                    <input type="number" name="PQty" value=" min="1" max="100"" placeholder="Quantity"><br><br>
                                    <input type="submit" name="addCart" class="btn btn-warning text-white w-100" value="Add To Cart">
                                </div>
                            </div>
                        </form>
                    </div>'; 
                }
                ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>