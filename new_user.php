<?php include('register.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>




<div class="container login-container">
<div class="row"></div>
            <div class="row">
                <div class="col-md-12 login-form-1">
                    <h3>Customer Registration</h3>
                    <form  method="post" action=" ">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="password"  placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary button" name="register" value="Register">
                        </div>
                        <div class="form-group">
                           <a href="login_page.php" class="ForgetPwd" value="user">Already a User? Login</a>
                        </div>
                    </form>
                </div>
               