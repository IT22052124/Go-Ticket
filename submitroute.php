<?php 
    require 'config.php';

    $name        = $_POST['Rname'];
    $departure   = $_POST['RDeparture'];
    $destination = $_POST['RDestination'];
    $distance    = $_POST['RDistance'];
    $Rodescription = $_POST['RDescription'];
    
    
    $sql = "INSERT INTO route(Route_id , RName , DepartureL, DestinationL , Distance , Description ) 
                        VALUES ('','$name','$departure','$destination','$distance','$Rodescription')";

        if($conn->query($sql)){
            
            echo "<script> alert( 'Route Created !' );</script>";
            header("Location: dashboard.php");
            
        }
        else {
            echo "error".$conn->error;
        }
        $conn->close();
?>
    
    