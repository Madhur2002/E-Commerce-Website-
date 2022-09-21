<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        input
        {
           margin:20px 0 20px 0;
        }
        body{
            background-image: url("bgimg.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
    </style>
</head>

<body>

    <div class=" margin d-flex vh-100 justify-content-center align-items-center">


        <form class="w-25 bg-dark p-4 text-center" method="POST" action="login1.php">
            <h2 class="text-white">Admin login</h2>

            <input autocomplete="off" class="form-control" name="username" placeholder="Enter User Name">
            <input class="form-control" name="userpassword" placeholder="Enter Password" type="password">
            <input type="submit" class="btn btn-secondary" value="Login">

        </form>

    </div>
</body>

</html>