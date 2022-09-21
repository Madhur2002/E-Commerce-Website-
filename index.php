<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f15fbc3514.js" crossorigin="anonymous"></script>

    <title>ALL IN ONE</title>
    <style>
    .h4 {
        font-family: Comic Sans MS, Comic Sans, cursive;
    }

    .h2 {
        font-family: Snell Roundhand, cursive;
    }

    .font_size {
        font-size: 30px;
    }

    .box {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        background: #efefef;
        line-height: 1.5;
    }
    </style>
</head>

<body>
    <?php include 'partials/header.php';?>
    <?php include 'admin/dbconnect.php';?>

    <!-- slider starts here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100;"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlxBPDyZd69fwY4mZUN4jSmIGkoFj2eaTH3jxEH8pE7GtY_fxe5t9iBUdCKi7xgg-p0CY&usqp=CAU"
                    alt="First slide" width=1500px; height=500px;>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn5.f-cdn.com/contestentries/209443/10921447/5554d648e241e_thumb900.jpg" alt="Second slide" width=1500px; height=500px;>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn6.f-cdn.com/contestentries/1763465/26435340/5ea1f5d3c0e25_thumb900.jpg" alt="Third slide" width=1500px; height=500px;>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container mt-5 mr-3">
        <div class="jumbotron bg-light" style="width:900px">
            <h1 class="display-5 text-center text-black h2"><i class="fa-brands fa-shopify"></i> WHY SHOP WITH US?</h1>
            <p class="lead h6 text-center">
            <div class="alert alert-danger" role="alert">
                <h4 class="h4">We have been one of the best selling websites recently with over 1cr products sold and
                    over 20k active and
                    <i class="fa-solid fa-face-smile"></i> users. We provide you assured deliveries and cashbacks.
                </h4>
            </div>
            </p>
        </div>
    </div>
    <hr>

    <h3 class="text-center text-skyblue">BROWSE CATEGORIES(Purchase according to Your Needs And Gendor <i
            class="fa-solid fa-face-smile-wink"></i>)</h3>
    <div class="container my-3">
        <div class="row">


            <div class="card-deck mt-4">
                <!-- Fetch all the categories using loop-->
                <?php  
                $sql = "SELECT * FROM `categories_ecommerce`";
                $result = mysqli_query($conn,$sql);  
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['caterory_id'];
                    $cat = $row['category_name'];
                    echo '
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/119x100/?' .$cat.',clothes/" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title"><a href="categories_display.php?catid=' .$id. '">'.$cat.'</a>  <i class="fa-regular fa-heart"></i></h5>
                            </div>
                            <div class="card-footer">
                            <a href="categories_display.php?catid=' .$id. '" class="btn btn-primary">View Products</a>
                            </div>
                        </div>
                    </div>';
                }     
            ?>
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