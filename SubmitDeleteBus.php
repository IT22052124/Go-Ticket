<?php
	require "config.php";
	
	$busnum = $_GET['bnum'];
	
	$sql="DELETE from bus WHERE BusNO='$busnum'";
	
	if(mysqli_query($conn,$sql)){
	echo "Deleted Succesfully";
	header("Location:vehicle.php");
}
else{
	echo "Error:".$conn->error;
}
$conn->close();

?>