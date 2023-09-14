<?php
include"config.php";
$id=$_POST['Id'];
$quty=$_POST['Quty'];
//echo $id;

	$update_cart=mysql_query("Update cart_tb set Quty='$quty' where Id='$id'") or die(mysql_error());
	
	if($update_cart)
	{
		echo "Sucess";
	}


?>