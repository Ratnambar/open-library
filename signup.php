<!doctype html>
<html>
<head>
<title></title>
<style>
body
{
	margin: 0 auto;
	background-image:url("signup.jpg");
	background-repeat:no-repeat;
	background-size:100% 720px;
	text-align:center;
}
.contained
{
	width:450px;
	height:550px;
	text-align:center;
	background-color:rgb(120,120,120);
	border-radius:4pX;
	margin:0 auto;
	margin-top: 100px;
}
input[type="text"],input[type="password"],input[type="date"]
{

	height:30px;
	width:200px;
	font-size:20px;
	border-radius:4px;
	border:none;
	margin-bottom:20px;
	background:color:solid black;
	padding-left:30px;
	}
	
	.con_btn
{
	padding:15px 30px;
	background-color:#ff0000;
	border:none;
	border-radius:4px;
	 border-bottom:solid white;
	text-align:center;

}
</style>
</head>
<?php
include 'db.php';
$name=$_POST['name'];
$dob=$_POST['dob'];
$username=$_POST['username'];
$password=base64_encode($_POST['password']);
if(isset($_POST['submit']))
 {
 	// $msg= "user at";
	$q="SELECT * FROM signin WHERE username='$username'";
	$u=mysqli_query($link,$q);
	if(mysqli_num_rows($u)>0)
	{
		if($_POST['username']==$username && base64_encode($_POST['password'])==$password)
		{
		$msg= "user already exist";
	}
}
	else{
		$f="INSERT INTO signin (name,dob,username,password) VALUES ('$name','$dob','$username','$password')";
		mysqli_query($link,$f);
// $msg= "succes";
  header("location: login1.php");		

}
}
?>
<link rel="stylesheet" type="text/css">
<body>
<div class="contained">
<div id="Sign_Up">
<table border="0">
<fieldset style="width:"30%">
<h1>Registration form</h1>
<tr>
<form method="post" action="">
<center>
<?php echo $msg; ?>
<td>Name</td><td><input type="text" name="name"></td></tr><br>
<tr>
<td>DOB</td>  <td><input type="date" name="dob"></td> 
</tr><br>
<tr>
<td>Username</td>  <td><input type="text" name="username" required/></td> 
</tr><br>
<tr>
<td>Password</td>  <td><input type="Password" name="password" required/></td>
</tr><br>

<tr>
  <td><input type="submit" name="submit" value="Signup" class="con_btn"></td>
</tr><br>
</center>
</div>
</form>
</table>
</fieldset>

</body>

</html>