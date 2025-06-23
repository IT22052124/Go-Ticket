<?php
session_start();
require'config.php';


$userid = $_POST['userid'];
$userame = $_POST['username'];       
$email = $_POST['mail'];
$phone = $_POST['phone'];
$city = $_POST['City'];

$x = $userid;

$sql = "UPDATE registration  SET
        
        username = '$userame',
        Email = '$email',
        mobile_no = '$phone',
         city= '$city'
         where user_id='$x'";
        
         if($conn->query($sql)){
            $_SESSION['name']=$userame;
            header("location:profile.php");
         }
         else{
            echo"you lost";
         }
         $conn->close();


?>