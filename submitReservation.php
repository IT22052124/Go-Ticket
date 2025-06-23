<?php
require "config.php";

$ir= $_POST['RID1'];
$idate= date('Y-m-d', strtotime($_POST['idate1']));
$itime = $_POST['time'];
$pcount= $_POST['count'];
$itype= $_POST['type1'];
$imail= $_POST['mail'];
$imobile= $_POST['mobile'];

$checkbox1=$_POST['s1'];  
$chk=" ";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1."  ";  
   }  

$sql= "INSERT INTO reservation(R_id, T_Date, T_Time, Pas_Count, T_Type, T_Mail, T_Mobile, Seat_No) VALUES('$ir', '$idate', '$itime', '$pcount', '$itype', '$imail', '$imobile', '$chk')";

if($conn->query($sql)){
	echo "Inserted successfully";
    header("Location:payment.php");
}
else{
	echo "Error:". $conn->error;
}
$conn-> close();

?>