<?php
error_reporting(0);
	$s=$_POST['s'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'knit');
	$q="select  from upload_file where filename=$s";
	$r=mysqli_query($con,$q);
	foreach($r as $s)
	{
	echo "<a href='$s'>$s</a>";
	}
	
	
?>