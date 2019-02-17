<?php
$dbhost="localhost";
$username="root";
$password="";
$db="ritu";

$conn=new mysql($localhost,$username,$password,$db);
if($conn->connect_error)
{
	die("Connection failed:" ,$conn->connect_error);
	}
	echo "Connected successfully";
	?>
