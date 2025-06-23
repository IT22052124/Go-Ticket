<?php
	require "config.php";
	
	$T_id= $_GET['id'];
	
	$sql= "delete from reservation WHERE T_ID='$T_id'";
	
	
	if(mysqli_query($conn, $sql))
{
	echo "<script>alert('Record deleted')</script>";
	header("Location:cancelReservation.php");
}
else{
	echo "<script>alert('Error')</script>";
}
mysqli_close($conn);

?>		