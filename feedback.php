<?php
session_start();
//error_reporting(0);
include('includes/config.php'); ?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
</head>
<style>
body{
		background-color:rgb(129, 235, 157);
	}
</style>
<body >
<div style= "margin:100px" class="ui main segment">
<div class="ui form">
<form method="POST" action="feedback.php">
<h2>Feedback Form</h2>
<div class="input_group">
<label>Email<label>
<input type="email" class="des" name="email" placeholder="enter Login ID" required>
</div>
<div style="padding-top:20px">
<p>How do you rate your overall experience?</p>
<div >
<input style="margin-right:50px;"  class="a" type="radio" value="good" name="rate" required><span style="font-size:1.2em">Good</span> 
</div>
<div>
 <input style="margin-right:50px" class="a" type="radio"value="average" name="rate" required><span style="font-size:1.2em">Average</span>
 </div>
 <div>
  <input  style="margin-right:50px" class="a" type="radio"value="bad" name="rate" required><span style="font-size:1.2em">Bad</span>
</div>

<div style="margin:50px 0 50px 0;" >
<label style="font-size:1.2em">Discription</label></div>
<textarea class="des" rows = "5" cols = "50" name = "description" style="border: none;outline: none;"placeholder="How Do You Feel About Our Mobile Shopping Portal"></textarea>
            
<div>
<button class="ui button primary" name="feed" class="btn btn-primary" >POST</button></div></div>
<?php 

if(isset($_POST['feed'])){
	$ema=mysqli_real_escape_string($con,$_POST['email']);
	$rating=mysqli_real_escape_string($con,$_POST['rate']);
    $desc=mysqli_real_escape_string($con,$_POST['description']);
    	$sql="INSERT INTO `feedback` (`email`,`rating`,`description`) VALUES ('$ema','$rating','$desc')";
	$do=mysqli_query($con, $sql);?>
	<script>window.alert('Thank You For Your Feedback');
			window.location.href='index.php';</script>
<?php }?>		
	</form>
	
<!-- <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog"> -->  
</body>
</html>