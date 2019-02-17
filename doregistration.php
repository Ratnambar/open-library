<?php

$name=$_POST['name'];
$dob=$_POST['dob'];
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'knit');

	$q="SELECT username FROM signin WHERE username='".$username."' ";
	$u=mysqli_query($con,$q);
	if(mysqli_num_rows($u))
	{
		$err="user already exist";
	}
	else{
		$f="INSERT INTO signin (name,dob,username,password) VALUES ('$name','$dob','$username','$password')";
		$results=mysqli_query($con,$f);
echo'saved';
  header("location: login.html");		

}
?>