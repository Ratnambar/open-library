<?php
session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
	
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body> 
  <div class="col-md-8"></div>
  
<nav class="navbar navbar-inverse navbar-fixed-top">
  
  <div class="container-fluid">
    <div class="navbar-header">
       <img src="logo1.jpg" alt="logo" height="78px" width="80%" style="float: left;margin-top: 0px;">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Study Matarial<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="java.html">JAVA</a></li>
          <li><a href="os.html">OS</a></li>
          <li><a href="daa.html">DAA</a></li>
		            <li><a href="let%20us%20c.html">C</a></li>

        </ul>
      </li>
      <li><a href="booklibrary.php">PDF</a></li>
	  <li><a href="contact.html">Contact Us</a></li>
	  	  <li><a href="about.html">About Us</a></li>&nbsp
		  <li><a href="question.php">Discussion</a></li>
      
		  <li><a href="#"> <?php echo $_SESSION['username']; ?></a></li>
    </ul>
  
	  	<div class="col-md-4"></div>
<form action="search.php" method="post" class="navbar-form navbar-right" >
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="s">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
</div></div></div>
</nav>
<div class="container">
<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
<ol class="carousel-indicators">
<li data-target="#mycarousel" data-slide-to="0" class="active"> </li>
<li data-target="#mycarousel" data-slide-to="1" >   </li>
<li data-target="#mycarousel" data-slide-to="2" >  </li>
</ol>
<div class="carousel-inner">
<div class="item active">
<img src="img/1.jpg" alt="first slide">
<div class="carousel-caption">
<h1>Online book Store</h1>
<button type= button class="btn btn-md btn-success">Click Me</button>
</div>
</div>
<div class="item">
<img src="img/2.jpg" alt="second slide">

</div>
<div class="item">
<img src="img/Buk11.jpg" alt="third slide">

</div>
</div>
<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span> 
</a>
<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>   
</a>


</div>
     <h2 style="background-color:slategray"> 
	 <marquee direction = "right">Online Book Store</marquee></h2>
<br>
<div class="jumbotron text-center">
<div class="container">
<div class  ="row">
<div class="col-md-3">	 
<img src="Clang.jpg" alt="book1">
 <a href="signup.php">C in Depth <br>by S.k. Srivastava</a><br>


</div>
<div class="col-md-3">	 
<img src="JAVA.jpg" alt="book2">
 <a href="signup.php">The Complete Reference<br>
 By Herb Schildt </a><br>

</div>
<div class="col-md-3">	 
<img src="OS.jpg" alt="book3">
 <a href="signup.php">Operating System By Galvin</a>

</div>
<div class="col-md-3">	 
<img src="DAA.jpg" alt="book4">
 <a href="signup.php">Introduction To Algorithm by Thomas H. Cormen
</a><br>

</div>
</div>
<br>
</div></div>
<div class="jumbotron text-center">
<div class="container">
<div class="col-md-3">	 
<img src="DBMS_korth.jpg" alt="book1">
 <a href="signup.php">Database Management System<br> by Korth</a><br>


</div>
<div class="col-md-3">	 
<img src="CN_frozen.jpg" alt="book2">
 <a href="signup.php">Computer Network by Frozen</a><br>

</div>
<div class="col-md-3">	 
<img src="C_balagswami.jpg" alt="book3">
 <a href="signup.php">
 <br>C by BalaGuru Swami</a><br>

</div>
<div class="col-md-3">	 
<img src="digital.jpg" alt="book4">
 <a href="signup.php">Digital logic and computer<br> Design by P.Raja</a><br>

</div>
</div>

</div></div>


<div class="container">
<div class  ="row">
<div class="col-md-4">	 
<u><h3 style="color:Mediumseagreen;">Company</h3></u>
 <a href="#">About Us</a><br>
 	  <a href="contact.html">Contact Us</a><br>
<a href="#">Privacy Policy</a><br>
	  <a href="#">Term & Conditions</a><br>
    <a href="logout.php">Logout</a><br><br>
	  </div>

	<div class="col-md-4">	 
<u><h3 style="color:Mediumseagreen;">Quick Links</h3></u>
 <a href="booklibrary.php">PDF books</a><br>
 	  <a href="study_material.php">online matarial</a><br>
<a href="question.php">Clear Your Doubts</a><br>
	  </div>
       
		<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-gmail"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
			</div> 
		</div>
		</div>
<br>
<br>
	<div class="navbar-inverse navbar-fixed-bottom">
<div class="container">
<div class="navbar-text pull-left">
<center>@copyright online book store 2018.All Right Reserved
</center>
</div>
</div>
</div>

</div></div>

<div class="navbar-text pull-right">
<a href="#"><i class ="fa fa-facebook fa-2x"></i></a>
<a href="#"><i class ="fa fa-twitter fa-2x"></i></a>
<a href="#"><i class ="fa fa-google-plus fa-2x"></i></a>
</div>
  </body>
</html>