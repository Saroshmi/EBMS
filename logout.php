<!DOCTYPE html>
<html>
<body>
 
<?php
 
   
 
    session_start();
    session_destroy();
    header("location:login_page.php");
 
?>
 
</body>
</html>