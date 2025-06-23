<?php
require 'config.php';

$uuserid = $_GET['id'];
$uuserame = $_GET['username'];       
$eemail = $_GET['email'];
$phone = $_GET['qmobile'];
$ccity = $_GET['city'];

?>


<html>
	<head>
		<title> go tickets </title>
		
	<body>

	<hr>
	<hr>
	<ul>
	
	<div id="homeTable">
		<form method="POST" action="submitprofileedit.php">
		<label>Item ID</label>
	<input type="text" value="<?php echo"$uuserid"?>" name="userid" readonly><br><br>
		
	<label>username</label>
	<input type="text"value="<?php echo"$uuserame"?>" name="username"><br><br>
	
	<label>mobile</label>
	<input type="text" value="<?php echo"$phone"?>"name="phone"><br><br>
	<label>city</label>
	<input type="text"value="<?php echo"$ccity"?>" name="City"><br><br>
	<label>email</label>
	<input type="text" value="<?php echo"$eemail"?>"name="mail"><br><br>
	<input type="submit" value="update" name="btnsubmit">
	</form>
	</div>
	
	<footer>
	<p>Author : Faizal</p>
	<p><a href = "mailto : shoppingcart.com">shoppingcart.com</a></p>
	</footer>
	</body>