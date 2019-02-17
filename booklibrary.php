<?php
session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: darkslategray;
  text-align: right;
    margin-bottom: 10px;
    margin-top: 40px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 27px;
  text-align: right;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ddd;
  color: black;
}
.topnav input
{
padding:8px;
margin-top:8px;
margin-right:6px:
text-align:center;
border:none;
font-size: 17px;
}
ul.all
{
    background: grey;
    padding: 40px;
 text-align: center;
  font-size: 30px;
}
ul li {
    background: white;
    margin: 15px;
padding 14px 16px;
}

 #sak
    {
        height: 100px;
         width:100%;
        background-color: black;
        color: antiquewhite;
        font-family: cursive;
        padding: inherit;
    margin-top: -10px;
        margin-bottom: -60px;
    }
    
    #sak img{
        float: right;
        margin-top: -80px;
    }
    #search-container
    {
        margin-bottom: 30px;
        
        
    }
   .all a
    {
    color:black;
        text-decoration: none;
        font
    }
     #footer a
    {
        color:black;
        text-decoration: none;
        font-size: 20px;
        font-family: sans-serif;
    }
</style>
<title> education</title>
</head>
<body>
    <div id="sak">
     
         <div>
         <marquee behavior="alternate" scrollamount="15" width="80%" direction="left" style="float: right"> <h1>online book store </h1></marquee>
        </div>
        <div >
        <img src="logo1.jpg" alt="logo" height="98px" width="20%" style="float: left;margin-top: 0px;">
        </div>
    </div>
<br>
<div class="topnav">
<br>
  <a href="home.php">Home</a>
  <a href="study_material.php">Study Material</a>
  <a class="active" href="booklibrary.php">PDF</a>
  <a href="about.html">About</a>
    <a href="contact.php">Contact Us</a>
    <a href="question.php">Discussion</a>

	<a href="#"> <?php echo $_SESSION['username']; ?></a>
<br>

<div id="search-container">
<form action="search.php" method="POST">

<input type="text" placeholder="search here" name="s" >
<input id="Button" type="submit" name="search" value="search">

</form>
</div>
</div>
  
<center>
<img src="abook.jpg" placeholder="book" style= height="500"; width="1300";>
</center>

<div style="padding-left:16px">

</div>
<div class="col-md-2">

</div></div>
<h1 style="text-align: center;"> <b>PDF BOOKS</b> </h1> 
<div class="aa">
<ul class="all"style=list-style-type:none;>
<li><a href="signup.php">let us c</a></li>
<button type="submit" value="pdf"> <a href="pdf.php">PDF</a></button>
<li><a href="signup.php">java</a></li><button type="submit" value="pdf" ><a href="book2.php">PDF</a></button>
<li><a href="signup.php">daa</a></li><button type="submit" value="pdf"> <a href="5.php">PDF</a></button>
<li><a href="signup.php">compiler design</a></li><button type="submit" value="pdf"><a href="6.php">PDF</a></button>
<li><a href="signup.php">operating system</a></li><button type="submit" value="pdf"><a href="book3.php">PDF</a></button>
<li><a href="signup.php">oos</a></li><button type="submit" value="pdf"><a href="7.php">PDF</a></button>
<li><a href="signup.php">computer organization</a></li><button type="submit" value="pdf"><a href="C:\xampp\htdocs\saksham\book\co.pdf">PDF</a></button>
<li><a href="signup.php">software engineering</a></li><button type="submit" value="pdf"> <a href="8.php">PDF</a></button>
<li><a href="signup.php">mobile computing</a></li><button type="submit" value="pdf"> <a href="C:\xampp\htdocs\saksham\book\mc.pdf">PDF</a></button>
<li><a href="signup.php">web technology</a></li><button type="submit" value="pdf"> <a href="book4.php">PDF</a></button>
<li><a href="signup.php">oot</a></li><button type="submit" value="pdf"> <a href="C:\xampp\htdocs\saksham\book\oot.pdf">PDF</a></button>
</ul>
</div>
<h3>
<footer id="footer" class="midnight-blue" style="background-color:MediumSeaGreen; text-align:center;">
 <div class="container">
 <div class="row">
 <div class="col-sm-6">
 &copy; 2018 <a target="_blank" href="toggle.html" title="online books service">online books</a>. All Rights Reserved.
                </div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Gp
                -->
                <div class="col-sm-6">
                 
                        <a href="home.php">Home</a>|
                        <a href="#">About Us</a>|
                        <a href="booklibrary.php">pdf</a>|
                        <a href="#">Contact Us</a>|
                        <a href="logout.php">Logout</a>|						

 
                   </h3>
               
            </div>
        </div>
    </footer>

</body>
</html>
