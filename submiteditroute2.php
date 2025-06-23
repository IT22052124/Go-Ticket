<?php 
   require 'config.php';
   
   $rid        = $_POST['iddd'];
   $name        = $_POST['Rname'];
   $departure   = $_POST['RDeparture'];
   $destination = $_POST['RDestination'];
   $distance    = $_POST['RDistance'];
   $Rodescription = $_POST['RDescription'];
   
   
   $sql = "UPDATE route SET RName = '$name', DepartureL= '$departure', DestinationL= '$destination', Distance= '$distance', Description= '$Rodescription' where Route_id = '$rid'";

    if($conn->query($sql)){
           
           echo "<script> alert( 'Route EDITED !' );</script>";
           header("Location:Editroute.php");
           
       }
       else {
           echo "error".$conn->error;
       }
       $conn->close();
?>
