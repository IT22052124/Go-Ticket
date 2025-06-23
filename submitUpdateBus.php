<?php
	require "config.php";
	
	$bus_num=$_POST['Bus_num'];
	$bus_driver=$_POST['Driver_name'];
	$bus_rid=$_POST['RID'];
	$bus_typ=$_POST['type'];
	$bus_char=$_POST['Bus_charge'];
	
	$sql="UPDATE bus SET
		  Driver='$bus_driver',
		  RouteID='$bus_rid',
		  Types='$bus_typ',
		  Charges='$bus_char'
		  where BusNO='$bus_num'";
		  
	 if(mysqli_query($conn,$sql)){
	echo "Inserted Successfully";
	header("Location:vehicle.php");
}
else{
	echo "Error:".$conn->error;
}
$conn->close();

?>