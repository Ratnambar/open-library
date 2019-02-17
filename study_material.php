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
  background-color:darkslategray;
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
        margin-bottom: 20px;
        
    }

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
    background-color: gray;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
    color: black;
    font-size: 30px;
    
}
    .side 
    {
    height: 695px;
    width: 25%;
    overflow: scroll;
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
    background-color: gray;
}
    .side ul {
    list-style-type: none;
    padding: 0;
}
   
.side ul a {
    text-decoration: none;
    color: black;
    font-size: 30px;
    }
  #footer
    {
        margin-top: 1.6%;
        
    }
    #footer a
    {
        color:black;
        text-decoration: none;
        font-size: 20px;
        font-family: sans-serif;
        background-color: MediumSeaGreen;
    }
#f img
    {
        margin-left: 80px;
        width: 75%;
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
  <a class="active" href=study_material.php>Study Material</a>
  <a href="booklibrary.php">PDF</a>
  <a href="about.html">About</a>
<a href="contact.php">Contact Us</a>
<a href="question.php">Discussion</a>
<a href="#"> <?php echo $_SESSION['username']; ?></a>
<br>

<div id="search-container">
<form action="search.php">

<input type="text" placeholder="search here" name="s" >
<input id="Button" type="button" name="Search" value="search">

</form>
</div>
</div>
    <frameset cols="25%","75%">
        </frameset>
               <div class="side">
  <ul>
    <li><a href="let%20us%20c.html"> &nbsp let us c</a></li>
    <li><a href="java.php"> &nbsp java</a></li>
    <li><a href="daa.html"> &nbsp daa</a></li>
    <li><a href="os.html">  operating system</a></li>
    <li><a href="oos.html"> &nbsp object oriented  system</a></li>
    <li><a href="cn.html">  computer  network</a></li>
    <li><a href="wt.html"> &nbsp   web  technol<br>ogy</a></li>
    <li><a href="cd.html">  compiler design</a></li>
      <li><a href="se.html">  software engineer<br>ing</a></li>
    <li><a href="automata.html">automata</a></li>
   

  </ul>

         </div>         

                  

    <center> <h1>overview</h1></center>
  <p> &nbsp  &nbsp  &nbsp Here we provide all the books which you want to read.. and enhance your knowledge
</p>
    <center> <h1>about</h1></center>
     &nbsp  &nbsp  &nbsp &nbsp  &nbsp In this section we will read about any topic which you want to read here we provide the online study material of any book....
       so here we go for improve your skills and  knowledge... <br>
  <div id="f"> 
    <img src="sam.jpg" alt="books">
    </div>
    <div>
            
   <footer id="footer" class="midnight-blue" style="background-color:MediumSeaGreen; text-align:center;margin-bottom: 50px; width:100%;">
        <a target="_blank" href="toggle.html" title="online books service">online books</a>. All Rights Reserved.
                <div class="col-sm-6">
                 
                        <a href="home.php">Home</a>|
                        <a href="#">About Us</a>|
                        <a href="booklibrary.php">pdf</a>|
                        <a href="#">Contact Us</a>|
						  <a href="logout.php">Logout</a>
						
                </div>
        </footer></div></p>
        
    </body>

</html>

