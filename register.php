
<?php
    session_start();


    $con = mysqli_connect('locathost','root','');
    mysqli_select_db($con, 'foodee');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    
    $s = " select * from user where name = 'username'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo"Username already taken";
    }
    else{
        $reg = "insert into user(username,email,mobile,password) values ('$username','$email','$mobile','$password')";
        mysqli_query($con, $reg);
        echo"Registation Successfull";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">

    <title>Hello, world!</title>
</head>
<style>
    body {
        background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)), url(images/steak.jpg) no-repeat;
        font-family: sans-serif;
        color: #2bd2d2;
        background-size: cover;
    }

    .divider-text {
        position: relative;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
        padding-bottom: 20px;

    }

    .divider-text span {
        padding: 7px;
        font-size: 12px;
        position: relative;
        z-index: 2;
    }

    .divider-text:after {
        content: "";
        position: absolute;
        width: 100%;
        border-bottom: 1px solid #ddd;
        top: 55%;
        left: 0;
        z-index: 1;
    }

    .btn-facebook {
        background-color: #405D9D;
        color: #fff;
        text-decoration: none;
    }

    .btn-twitter {
        background-color: #42AEEC;
        color: #fff;
        text-decoration: none;
    }

    .log {
        width: 50%;
    }

    .p7c {
        margin: auto;
    }

    .form-control {
        padding-right: 100px;
    }

    .hi4 {
        text-decoration: none;
    }

</style>

<body>
       
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6 log">

                <div class="card bg-light">
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        <h4 class="card-title mt-3 text-center">Create Account</h4>
                        <p class="text-center">Get started with your free account</p>
                        <p>
                            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                        </p>
                        <p class="divider-text">
                            <span class="bg-light">OR</span>
                        </p>
                        <form name="registar" action="signup.php" method="post">
                            <div class="form-group input-group">
                                <p class="p7c">Full Name</p>
                                <input name="username" class="form-control" placeholder="Enter name" type="text">

                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <p class="p7c">Email address</p>
                                <input name="email" class="form-control" placeholder="example@gmail.com" type="email">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <p class="p7c">Phone number</p>
                                <input name="mobile" class="form-control" placeholder="+880XXXXXXXXXX" type="text">
                            </div> <!-- form-group// -->

                            <div class="form-group input-group">
                                <p class="p7c">Create password</p>
                                <input name="password" class="form-control" placeholder="**********" type="password">
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <a href="index.php" class="hi4"><button type="submit" class="btn btn-primary btn-block"> Create Account </button></a>
                            </div> <!-- form-group// -->

                        </form>
                    </article>
                </div> <!-- card.// -->
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
