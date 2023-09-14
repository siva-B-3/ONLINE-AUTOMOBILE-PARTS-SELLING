<?php
ob_start();
session_start();
	include"config.php";

		$name=$_POST["username"];
		$pass=$_POST["passwrd"];
		
		$check=mysql_query("select * from user_register_tb where Email='$name' and Password='$pass'") or die(mysql_error());
		
		$count=mysql_num_rows($check);
		
		if($count=='1')
		{
			//echo "sucess";
			
			$_SESSION["sess_user_name"]=$name;
			
			$data=array();
			$i=0;
			
			while($row=mysql_fetch_array($check))
			{
				$data[$i]['Fname']=$row['Fname'];
				$data[$i]['Lname']=$row['Lname'];
				$data[$i]['Email']=$row['Email'];
				$data[$i]['Address1']=$row['Address1'];
				$data[$i]['Address2']=$row['Address2'];
				$data[$i]['City']=$row['City'];
				$data[$i]['Postal']=$row['Postal'];
				$data[$i]['Contact']=$row['Contact'];
				
			}
			echo json_encode($data);
		}
		
		
?>