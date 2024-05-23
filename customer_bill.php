<?php
require 'dbcon.php';
session_start();
echo " Welcome  " . $_SESSION['email'];
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
                        <h4>Bill Details 
                            <a href="customer_profile.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                       if(isset($_SESSION['email']))
                       {                 
                            $email =mysqli_real_escape_string($con, $_SESSION['email']);
                            $query = "SELECT cus.name,cus.type,bi.meter,units,total FROM customer cus,bill bi WHERE email='$email' and cus.meter=bi.meter";
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
                                    <div class="mb-3">
                                        <label>Units Consumed</label>
                                        <p class="form-control">
                                            <?=$customer['units'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Bill Amount</label>
                                        <p class="form-control">
                                            <?=$customer['total'];?>
                                        </p>
                                    </div>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Your meter details are not yet registered . Contact your local EB office .</h4>";
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