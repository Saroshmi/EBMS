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

    <title>Bill Details</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Bill Details
                            <a href="bill_calc.php" class="btn btn-primary  float-end">Add Bill</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Customer Meter Number</th>
                                    <th>Previous Month Reading</th>
                                    <th>Current Month Reading</th>
                                    <th>Connection Type</th>
                                    <th>Units Consumed</th>
                                    <th>Bill Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM bill";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $bill)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $bill['meter']; ?></td>
                                                <td><?= $bill['previous']; ?></td>
                                                <td><?= $bill['current']; ?></td>
                                                <td><?= $bill['type']; ?></td>
                                                <td><?= $bill['units']; ?></td>
                                                <td><?= $bill['total']; ?></td>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>