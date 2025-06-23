<?php
	require 'config.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$rating = $_POST['rating1'];
	$comment = $_POST['message'];
	
	$sql = "INSERT INTO feedback(feedback_id,name,email,rating,message)
				VALUES ('','$name','$email','$rating','$comment')";
				
				if($conn->query($sql)){
					echo "<script> alert ('feedback created!');</script>";
					header("Location:reservation.php");
				}
				else{
					echo "error".$conn-> error;
				}
				$conn-> close();
?>		

				
	