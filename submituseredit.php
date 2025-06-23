<?php
require'config.php';


$userid = $_POST['userid'];
$userame = $_POST['username'];       
$email = $_POST['mail'];
$phone = $_POST['phone'];
$city = $_POST['City'];


$sql = "UPDATE registration SET
        
        username = '$userame',
        Email = '$email',
        mobile_no = '$phone',
         city= '$city'";

         if($conn->query($sql)){
            echo"sucessfull";
         }
         else{
            echo"unsucessful";
         }
         $conn->close();


?>