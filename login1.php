<?php 
include 'db.php';
   extract($_POST);
   if(isset($submit)) {
  
      
      
      
      $q = "SELECT * FROM signin WHERE username= '$username'  ";
      $result=mysqli_query($link,$q);
      $row = mysqli_fetch_array($result);
   
      if(base64_decode($row['password']) == $password) {
		  session_start();
       
         $_SESSION['username'] = $username;
         
         header("location: home.php");
      }else {
         echo  "Your Login Name or Password is invalid";
      }
   }
?>


<html>
<head>
<title>Login Form Design</title>
</head>
<link rel="stylesheet" type="text/css" href="new.css">
<body>
<div class="container">
<img src="user.jpg">
<form action="" method="post">
<div class="font-input">

<input type="text" name="username" placeholder="Enter username" autofocus required><br>
</div>
<div class="font-input">
<input type="Password" name="password" placeholder="Enter password" required>
<br>

</div>
<input type="submit" name="submit" value="login" class="con_btn"> <br>
<a href="#"><p> forget pasword?</p></a>
    </form>
    </div>

</body>

</html>
