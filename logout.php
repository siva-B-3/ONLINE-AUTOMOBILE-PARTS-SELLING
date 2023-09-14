<?php   
session_start(); 
session_destroy(); 
header("location:Online Shoping/index.php");
exit();
?>