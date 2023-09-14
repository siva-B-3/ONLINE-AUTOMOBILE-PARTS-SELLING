<?php
	$id=$_POST['Id'];
	
	include"config.php";
	
	$delete_cart=mysql_query("delete from cart_tb where Id='$id'") or die(mysql_error());
	
	if($delete_cart)
	{
		echo "sucess";
	}
?>