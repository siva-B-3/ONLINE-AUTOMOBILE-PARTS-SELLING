<?php
include"config.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$postal=$_POST['postal'];
$contact=$_POST['contact'];

$insert_user=mysql_query("insert into user_register_tb(Fname,Lname,Email,Password,Address1,Address2,City,Postal,Contact) 
values('$fname','$lname','$mail','$pass','$address1','$address2','$city','$postal','$contact')") or die(mysql_error());

if($insert_user)
{
	echo "Sucess";
}



?>