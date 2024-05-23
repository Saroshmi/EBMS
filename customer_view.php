<?php
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

    <title>Customer View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Customer Name</label>
                                        <p class="form-control">
                                            <?=$customer['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Mobile Number</label>
                                        <p class="form-control">
                                            <?=$customer['mobile'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$customer['address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Customer Email</label>
                                        <p class="form-control">
                                            <?=$customer['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Meter Number</label>
                                        <p class="form-control">
                                            <?=$customer['meter'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Connection Type</label>
                                        <p class="form-control">
                                            <?=$customer['type'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
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