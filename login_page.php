<?php include('login_authentication.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>




<div class="container login-container">
<div class="row"></div>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Customer Login</h3>
                    <form  method="post" action=" ">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="password"  placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary button" name="sub" value="Login">
                        </div>
                        <div class="form-group">
                           <a href="new_user.php" class="ForgetPwd" value="newuser">New User?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Admin Login</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                        </div>
                    
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"  placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                        <a href="index.php" class= "btn btn-primary btn-light">Login</a>
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        



        <script src="" async defer></script>
    </body>
</html>