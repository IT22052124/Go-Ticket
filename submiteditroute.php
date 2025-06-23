<?php 
    require 'config.php';

    $query ="SELECT Route_id,RName FROM route";
    $result = $conn->query($query);
    if($result->num_rows> 0){
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
    
    