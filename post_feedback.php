<?php

	include"config.php";
	$feed_cmd=$_POST['feed_cmd'];
	$feed_date=$_POST['feed_date'];
	$feed_mail=$_POST['feed_mail'];
	$insert=mysql_query("insert into  feedback_tb(from_user,Date,feedback) values('$feed_mail','$feed_date','$feed_cmd')") or die(mysql_error());
	
	if($insert)
	{
		echo"Success";
	}
?>