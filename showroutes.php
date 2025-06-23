<?php 
    require 'config.php';

    $query ="SELECT RName FROM route LIMIT 7";
    $result = $conn->query($query);
    if($result->num_rows> 0){
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>