<?php
include 'db.php';

session_start();
$uid=$_SESSION['username'];
extract($_POST);
if(isset($sub))
{

	if(mysqli_query($link, "insert into quest values('','$comment', '$uid',NOW())"))
	{
		echo "yes...........";
	}
	else
	{
		echo "no......";
	}

}
if(isset($sub1))
{

	if(mysqli_query($link, "insert into reply values('','$qid1', '$uid','$cmt',NOW())"))
	{
		echo "yes...........";
	}
	else
	{
		echo "no......";
	}

}

?>


<html>
<head>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<link href = "css/bootstrap.css" rel = "stylesheet" type = "text/css"/>
<link href="style2.css" rel="stylesheet" type="text/css"/>
<link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<title>Comment Box</title>
</head>
<body>
<!------------container------->

<div class="container">

<h1>COMMENT BOX</h1>
<!-------Wrap------------>
<div id="wrap">
<div id="main">
<div class="row">
<div class="col-md-5">
<h3 class="heading">Comments and Responses</h3>
</div>
<div class="col-md-7">
<div id="upper_blank"></div>
</div>
</div>
</div>

<!--<p>Your email address will not be published. Required fields are marked *</p>-->

<!------------Form Start---------->

<div id='form'>
<div class="row">
<div class="col-md-12">

<form  method="post"  enctype="multipart/form-data">


<div id="comment-message" class="form-row">
<textarea name = "comment" placeholder = "Message" id = "comment" ></textarea>
</div>
<a href="#"><input type="submit" name="sub" id="commentSubmit" value="Submit Comment"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>

<div id="second">
<div class="row">
<div class="col-md-2">
<h3 class="second_heading"><b>Leave a Reply</b></h3>
</div>
<div class="col-md-10">
<div class="blank">

</div>
</div>
</div>

<?php
$sel=mysqli_query($link,"select * from quest  ORDER BY dat DESC");
while($arr=mysqli_fetch_array($sel))
{$qid = $arr['qid'];
?>

<div id="middle">
	<h3><?php echo "$arr[comment]"; ?></h3>
	<p>User:<?php echo "$arr[username]"; ?>   Date:<?php echo "$arr[dat]"; ?></p>
<form method="post">

<br><br><br><textarea  name="cmt" id="comments" rows="2" cols="100" ></textarea>
<input type="hidden" name="qid1" value="<?php echo $arr['qid'];?>">
<?php
if($uid=='')
{?>
	<input type="button" name="" value="Need Login First">
<?php
}
else
{?>
<input type="submit" name="sub1" value="reply">
<?php
}
?>
</form>
<div style="    position: relative;">
<?php
$sel2=mysqli_query($link,"select * from reply where q_id= $qid  ORDER BY dat DESC");
while($arr2=mysqli_fetch_array($sel2))
{
	?>
	<h4><?php echo $arr2['ans'];?></h4>
	<p>User"<?php echo $arr2['u_id'];?>  Date:<?php echo $arr2['dat'];?></p>
	<?php
}
?>	
</div>		
</div>
<?php
}
?>

<
</div>


</div>
</body>
</html>