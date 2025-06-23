<?php
	require "config.php";
	
	$Rid= $_POST['ridd'];
	
	$sql= "delete from route WHERE Route_id ='$Rid'";
	
	
	if(mysqli_query($conn, $sql))
{
	echo "<script>alert('Record deleted')</script>";
	header("Location:editroute.php");
}
else{
	echo "<script>alert('Error')</script>";
}
mysqli_close($conn);

?>		