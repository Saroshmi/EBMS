<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<head>
<title> Power Bill</title>
<style>
*{
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<div class="container">
    <h2>BILL CALCULATOR</h2>
<form  method="post">

<div class="row">
    <div class="col-25">
    <label for="meter">Meter Number</label>
    </div>
    <div class="col-75">
    <input type="number" name="meter" value="" placeholder="Enter meter number"/>
    </div>
</div>

<div class="row">
    <div class="col-25">
    <label for="current">Units consumed current month</label>
    </div>
    <div class="col-75">
    <input type="number" name="current" value="" placeholder="Enter units consumed current month"/>
    </div>
</div>
<div class="row">
    <div class="col-25">
    <label for="previous">Units consumed previous month</label>
    </div>
     <div class="col-75">
    <input type="number" name="previous" value="" placeholder="Enter units consumed previous month"/> 
</div>
</div>
<div class="row">
    <div class="col-25">
    <label for="c">Connection Type</label>
</div>
<div class="col-75">
<select name="c">
<option>Select </option>
<option>Domestic </option>
<option>Commercial </option>
</select>
</div>
</div>

<div class="row">
 <input type="submit" name="btn_submit" value="Submit"/> 
</div>

</form>
</div>

<?php
if(isset($_POST['btn_submit']))
{
$meter = $_POST['meter'];
$current = $_POST['current'];
$previous = $_POST['previous'];
$c = $_POST['c'];
$units=$current-$previous;
if($c=="Domestic")
{
if($units>0&&$units<=50)
{
$price = ($units*1.35);
}
else if($units>50&&$units<=100)
{
$price = ($units*2.15);
}
else if($units>100&&$units<=150)
{
$price = ($units*3);
}
else if($units>150&&$units<=250)
{
$price = ($units*3.5);
}
else if($units>250&&$units<=400)
{
$price = ($units*4);
}
else if($units>400)
{
$price = ($units*6);
}
echo "<table border=1  cellspacing=0 cellpading=0>
Bill Statement</table>";
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=black>Meter Number is</td> <td>$meter</font></td></tr>
<tr> <td><font color=black>Previous Month Reading is </td> <td>$previous</font></td></tr>
<tr> <td><font color=black>Currenr Month Reading is </td> <td>$current</font></td></tr>
<tr> <td><font color=black>Connection Type is </td> <td>$c</font></td></tr>
<tr> <td><font color=black>Total consumed unit is </td> <td>$units</font></td></tr>
<tr> <td><font color=black>Total Bill amount is</td> <td>$price</font></td></tr>
</table>";
}
else if($c=="Commercial")
{
if($units>0&&$units<=50)
{
$price = ($units*3);
}
else if($units>50&&$units<=100)
{
$price = ($units*4.5);
}
else if($units>100&&$units<=150)
{
$price = ($units*5.5);
}
else if($units>150&&$units<=250)
{
$price = ($units*6.8);
}
else if($units>250&&$units<=400)
{
$price = ($u*7.2);
}
else if($units>400)
{
$price = ($units*9);
}
echo "<table border=1  cellspacing=0 cellpading=0>
Bill Statement</table>";
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=black>Meter Number is</td> <td>$meter</font></td></tr>
<tr> <td><font color=black>Previous Month Reading is </td> <td>$previous</font></td></tr>
<tr> <td><font color=black>Currenr Month Reading is </td> <td>$current</font></td></tr>
<tr> <td><font color=black>Connection Type is </td> <td>$c</font></td></tr>
<tr> <td><font color=black>Total consumed unit is </td> <td>$units</font></td></tr>
<tr> <td><font color=black>Total Bill amount is</td> <td>$price</font></td></tr>
</table>";
}
else
{
echo "Invalid Number";
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Bill Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4>Add Bill
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                        <div class="mb-3">
                                <label>Meter Number</label>
                                <input type="text" name="meter" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Previous Month Reading</label>
                                <input type="text" name="previous" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Current Month Reading</label>
                                <input type="text" name="current" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Connection Type</label>
                                <input type="text" name="c" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Units Consumed</label>
                                <input type="text" name="units" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Bill Amount</label>
                                <input type="text" name="total" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_bill" class="btn btn-primary">Add Bill</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





