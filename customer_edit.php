<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Customer Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['meter']))
                        {
                            $customer_meter = mysqli_real_escape_string($con, $_GET['meter']);
                            $query = "SELECT * FROM customer WHERE meter='$customer_meter' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $customer = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="customer_meter" value="<?= $customer['meter']; ?>">

                                    <div class="mb-3">
                                        <label>Customer Name</label>
                                        <input type="text" name="name" value="<?=$customer['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Mobile Number</label>
                                        <input type="text" name="mobile" value="<?=$customer['mobile'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$customer['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$customer['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Meter Number</label>
                                        <input type="text" name="meter" value="<?=$customer['meter'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Connection Type</label>
                                        <input type="text" name="type" value="<?=$customer['type'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_customer" class="btn btn-primary">
                                            Update Customer
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Meter Number Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>