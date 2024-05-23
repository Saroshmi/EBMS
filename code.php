<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_customer']))
{
    $customer_meter = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customer WHERE meter='$customer_meter' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
    $customer_meter = mysqli_real_escape_string($con, $_POST['customer_meter']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $address= mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $meter = mysqli_real_escape_string($con, $_POST['meter']);
    $type = mysqli_real_escape_string($con, $_POST['type']);

    $query = "UPDATE customer SET name='$name', mobile='$mobile',address='$address', email='$email', meter='$meter', type='$type' WHERE meter='$customer_meter' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_customer']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $meter = mysqli_real_escape_string($con, $_POST['meter']);
    $type = mysqli_real_escape_string($con, $_POST['type']);

    $query = "INSERT INTO customer (name,mobile,address,email,meter,type) VALUES ('$name','$mobile','$address','$email','$meter','$type')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Customer Created Successfully";
        header("Location: customer_add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: customer_add.php");
        exit(0);
    }
}

if(isset($_POST['save_bill']))
{
    $meter = mysqli_real_escape_string($con, $_POST['meter']);
    $previous = mysqli_real_escape_string($con, $_POST['previous']);
    $current = mysqli_real_escape_string($con, $_POST['current']);
    $type = mysqli_real_escape_string($con, $_POST['c']);
    $units = mysqli_real_escape_string($con, $_POST['units']);
    $total = mysqli_real_escape_string($con, $_POST['total']);

    $query = "INSERT INTO bill (meter,previous,current,type,units,total) VALUES ('$meter','$previous','$current','$c','$units','$total')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Bill AddedSuccessfully";
        header("Location: bill_calc.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Bill Not Added";
        header("Location: bill_calc.php");
        exit(0);
    }
}


?>