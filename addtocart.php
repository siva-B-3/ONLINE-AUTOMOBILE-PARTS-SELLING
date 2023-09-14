<?php
ob_start();
session_start();
include"config.php";
$ssid=$_SESSION['sessionid'];

$product_id=$_SESSION['prdtid'];

$quty=$_POST['quty'];
		
		$inser_data=mysql_query("insert into Cart_tb(Session_id,Product_id,Quty) values('$ssid','$product_id','$quty')") or die(mysql_error());
		
		if($inser_data)
		{
			echo "sucess";
		}
?>