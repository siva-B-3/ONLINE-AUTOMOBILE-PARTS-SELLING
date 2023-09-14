<?php
	$conncet=mysql_connect("localhost","root","");
	
	$select_db=mysql_select_db("carshop",$conncet);
	
	if(!$select_db)
	{
		echo"<script>alert('Error In Database Connection');</script>";
	}


?>