<?php 
include("dbcon.php");
session_start();
if(isset($_POST['register']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$res = mysqli_query($con,"insert into user values('$email','$password')");
$_SESSION['email']=$email;
echo "You are registered Successfully ";
header("location:login_page.php"); 
//customer_profile.php?email=$email  

}
?>