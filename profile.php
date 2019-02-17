<?php


    $host="localhost"; // Host name
    $username="root"; // Mysql username
    $password=""; // Mysql password
    $db_name="signup"; // Database name
    $tbl_name="user"; // Table name

    // Connect to server and select databse.
    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
    mysqli_select_db("$db_name")or die("cannot select DB");

    $myusername=$_POST['myusername'];
    $mypassword=$_POST['mypassword'];

    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);

    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);


    $sql="SELECT * FROM $tbl_name WHERE user_id='$myusername' and user_password='$mypassword'" ;
    $result=mysqli_query($sql);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count==1){

    // Register $myusername, $mypassword and redirect to file "login_success.php"
    session_register("myusername");
    session_register("mypassword");

     $row=mysqli_fetch_array($result);
                            if ($row['group_id']==0){
                            header("location:../user.php");
                            }
                            elseif ($row['group_id']==1) {
                            header("location:../admin.php");
                            }
    //header("location:../menu.php");
    }


    else {
    echo "Wrong Username or Password";
    }
    ?>
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
input[type="text"],input[type="password"]
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
<link rel="stylesheet" type="text/css">
<body>
<div class="contained">
<div id="Sign_Up">
<table border="0">
<fieldset style="width:30%">
<h1>Registration form</h1>
<tr>
<form method="post" action="profile.php">
<center>
<td>Name</td><td><input type="text" name="Name "/></td></tr><br>
<tr>
<td>Email</td>  <td><input type="Text" name="Email "/></td> 
</tr><br>
<tr>
<td>Username</td>  <td><input type="text" name="User"/></td> 
</tr><br>
<tr>
<td>Password</td>  <td><input type="Password" name="Pass"/></td>
</tr><br>
<tr>
<td>Confirm Password</td>  <td><input type="Password" name="CPass"/></td>
</tr><br>
<tr>
  <td><input type="submit" name="submit" value="Signup" class="con_btn"/></td>
</tr><br>
</center>
</form>

</fieldset></table></div></div></body>

</html>