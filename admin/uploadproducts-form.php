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

        .center{   
            position: absolute;
            top:50%;
            left:50%;
            width:400px;
            transform: translate(-50%,-50%);
        }
        input
        {
            margin:20px 0 20px 0;
        }
        .margin{
            margin-top:650px;
            height:100%
        }
    </style>
</head>
<body>
    

    <div class="center">

        <form enctype=multipart/form-data class="bg-secondary w-100 p-4 text-center" method="POST" action="uploadproducts.php">

            <h3 class="text-white">Upload Product</h3>

            <input required autocomplete="off" class="form-control text-danger" name="name" placeholder="Product Name">

            <textarea required class="form-control" name="details" rows="4" placeholder="Product details..."></textarea>
            
            <input required class="form-control" name="price"  placeholder="Product Price" type="number">

            <input required class="form-control" name="imdata" type="file" >

            
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
            <div class="text-center">
                <input class=" btn btn-danger" type="submit" value="Upload"> 
            </div>
        </form>
    </div>
    
</body>
</html>