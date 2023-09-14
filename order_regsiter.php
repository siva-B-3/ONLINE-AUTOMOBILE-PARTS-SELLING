<?php
ob_start();
session_start();

include"config.php";
$mail=$_POST['mail'];
$command=$_POST['command'];
$product_id=$_SESSION['sessionid'];

//echo $product_id;

		$inser_data=mysql_query("Insert into order_register_tb(user_id,Session_id,Commends) values('$mail','$product_id','$command')") or die(mysql_error());
		
		if($inser_data)
		{
			echo "Success";
		}

?>