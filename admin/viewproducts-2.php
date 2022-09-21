<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f15fbc3514.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-8 m-auto">


        <table class="table table-dark table-striped margin">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>DESC</th>
                <th>PRICE</th>
                <th>IMAGE</th>
                <th>CATEGORY</th>
                <th>DELETE</th>
                <th>UPDATE</th>
            </thead>

            <tbody>
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT * FROM `products`";
                    $result = mysqli_query($conn,$sql);

                    while($row=mysqli_fetch_assoc($result)){
                        $pid = $row['product_id'];
                        echo "
                        <tr>
                        <td>$row[product_id]</td>
                        <td>$row[product_name]</td>
                        <td>$row[product_desc]</td>
                        <td>$row[product_price]</td>
                        <td><img src='$row[imlocation]' height='180px' width='180px'></td>
                        <td>$row[product_category_id]</td>
                        <td>
                        <div>
                            <a href='deletepdt.php?pid=$pid'>
                            <button class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                            </a>
                        </div>
                        </td>
                        <td>
                        <div>
                            <a href='update.php?pid=$pid'>
                            <button class='btn btn-success'>UPDATE</button>
                            </a>
                        </div>
                        </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    <div class='text-center'>
        <h3><a href="uploadproducts-form.php">Click here to upload more products</a></h3>
        <h3><a href="admin_navbar.php">Click here to go to admin home page</a></h3>
    </div>
</body>
</html>