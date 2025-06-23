<?php
require "config.php";

$bnum= $_POST['Bus_Number'];
$driv=$_POST['Driver'];
$rid=$_POST['RID'];
$type=$_POST['type'];
$charge=$_POST['Charges'];


$sql = "INSERT INTO bus(BusNO,Driver,RouteID,Types,Charges) values ('$bnum','$driv','$rid','$type','$charge')";

if(mysqli_query($conn,$sql)){
	echo "Inserted Successfully";
	header("Location:vehicle.php");
}
else{
	echo "Error:".$conn->error;
}
$conn->close();
?>