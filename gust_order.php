<?php
ob_start();
session_start();

$product_id=$_SESSION['sessionid'];
include"config.php";

//echo $product_id;

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$contact=$_POST['contact'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$postal=$_POST['postal'];
$commends=$_POST['commends'];

$insert=mysql_query("Insert into gust_tb(Fname,Lname,Mail,Phone,Address1,Address2,City,Postal,Comments,Sessionid) 
values('$fname','$lname','$mail','$contact','$address1','$address2','$city','$postal','$commends','$product_id')")  or die(mysql_error());

if($insert)
{
	echo "Success";
}




?>