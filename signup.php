<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">

    <title>Hello, world!</title>
</head>
<style>
    body{  
        background: url(images/steak.jpg) no-repeat ; 
        font-family: sans-serif;
        color: #2bd2d2;
    }
    .log{ 
            margin-top: 55px;
    margin-left: 40px;
    }
    .from-length{
        width: 50%;
           
    }
    .signup{
        margin-top: 35px;
        
    }
    
</style>
<body>
       
   
    <div class="container">
        <div class="row">
           <div class="col-md-4"></div>
            <div class="col-md-6 log">
                <form action="index.php" method="post">
                    <div class="form-group signup">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control from-length" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted" style=" color: #61a5a5;">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control from-length" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    
                    <p>Don't have an account? <a href="register.php" target="_blank" style="color:#f5f90f; font-weight: bold; text-decoration: none">Register Now</a>.</p>
                </form>
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
