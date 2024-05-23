<?php 
include("dbcon.php");
session_start();
if(isset($_POST['sub']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$res = mysqli_query($con,"select* from user where email='$email'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
$_SESSION['email']=$email;
echo "You are login Successfully ";
header("location:customer_profile.php?email=$email");   

}
else
{
	echo "Login failed ";
}
}
?>