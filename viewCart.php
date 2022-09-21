<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f15fbc3514.js" crossorigin="anonymous"></script>
    <style>
    </style>
</head>
<body>
    <?php
    include 'partials/header.php';
    ?>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-12 text-center bg-light rounded">
                <h1 class="text-info">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center mt-5 marginl">
                    <thead class="bg-dark text-white fs-5">
                        <th>S-No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        $ptotal = 0;
                        $total = 0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                $ptotal = (int)$value['productPrice'] * (int)$value['productQty'];
                                $total += (int)$value['productPrice'] * (int)$value['productQty'] ; $ptotal = (int)$value['productPrice'] * (int)$value['productQty'];
                                echo "
                                <form action='InsertCart.php' method='POST'>
                                    <tr>
                                    <td>$key</td>
                                    <td><input type='hidden' name='PName' value='$value[productName]'> $value[productName]</td>
                                    <td><input type='hidden' name='PPrice' value='$value[productPrice]'><i class='fa-solid fa-indian-rupee-sign'></i>$value[productPrice]</td>
                                    <td><input type='number' name='PQty' value='$value[productQty]'></td>
                                    <td><i class='fa-solid fa-indian-rupee-sign'></i>$ptotal</td>
                                    <td><button name='update' class='btn btn-success text-white'>Update</button></td>
                                    <td><button name='remove' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button></td>
                                    <td><input type='hidden' name='item' value='$value[productName]'></td>
                                    </tr>
                                </form>
                                    ";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="col-lg-3 text-center m-auto alert alert-secondary" role="alert">
                <h3 class="text-center m-auto">SUBTOTAL:</h3>
                <h3 class="text-dark"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo number_format($total,2); ?></h3>
            </div>
        </div>
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