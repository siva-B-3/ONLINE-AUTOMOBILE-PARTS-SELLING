<?php
	ob_start();
	session_start();
	include"config.php";
	$product_id=$_SESSION['sessionid'];
	$delete_session=mysql_query("delete from  cart_tb where Session_id='$product_id'") or die(mysql_error());
	
	if($delete_session)
	{
		echo "Sucess";
	}
	
	
	

?>