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
        margin-bottom: 20px;
        
    }

.side {
    height: 530px;
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
        margin-top: 4.5%;
        
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
<a href="contact.html">Contact Us</a>
<div id="search-container">
<form action="search.php">

<input type="text" placeholder="search here" name="search" >
<input id="Button" type="button" name="Search" value="search">

</form>
</div>
</div>
    
    <div class="side">
  <ul>
      <li><a href="#"> &nbsp <u>JAVA</u></a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch1.pdf" target="blank"> chapter 1</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch2.pdf" target="blank"> chapter 2</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch3.pdf" target="blank">chapter 3</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch4.pdf" target="blank"> chapter 4</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch5.pdf" target="_blank"> chapter 5</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch6.pdf" target="_blank">chapter 6</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch7.pdf" target="_blank"> chapter 7</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch8.pdf" target="_blank">chapter 8</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch9.pdf" target="_blank"> chapter 9</a></li>
    <li><a href="C:\xampp\htdocs\saksham\java\ch10.pdf" target="_blank"> chapter 10</a></li>
      <li><a href="C:\xampp\htdocs\saksham\java\ch11.pdf" target="_blank"> chapter 11</a></li>
      <li><a href="C:\xampp\htdocs\saksham\java\ch12.pdf" target="_blank"> chapter 12</a></li>
      <li><a href="C:\xampp\htdocs\saksham\java\ch13.pdf" target="_blank"> chapter 13</a></li>
      <li><a href="C:\xampp\htdocs\saksham\java\ch14.pdf" target="_blank"> chapter 14</a></li>
   

  </ul>
    </div>         
    <center> <h1><u>JAVA</u></h1></center>
       <center><img src="java.jpg" alt="java" style="height: 420px;"></center>
        </div>
  <div class="container">
    <footer id="footer" class="midnight-blue" style="background-color:MediumSeaGreen; text-align:center;margin-bottom: 50px; width:100%;">
        <a target="_blank" href="toggle.html" title="online books service">online books</a>. All Rights Reserved.
                <div class="col-sm-6">
                 
                        <a href="#">Home</a>|
                        <a href="#">About Us</a>|
                        <a href="#">pdf</a>|
                        <a href="#">Contact Us</a>
                </div>
        </footer></div>
    
        </body>
        
</html>

