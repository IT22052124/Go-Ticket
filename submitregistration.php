<?php
require 'config.php';

$fName = $_POST['Firstname'];
$lName = $_POST['Lastname'];
$Email = $_POST['email'];
$phone = $_POST['number'];
$Gender = $_POST['gender'];
$City = $_POST['city'];
$username= $_POST['username'];
$Password= $_POST['password'];

$sql = "INSERT INTO registration(User_id,f_name,l_name,Email,Mobile_no,city,gender,Username,Password)
        VALUES('','$fName','$lName','$Email','$phone','$City','$Gender','$username','$Password')";

        if($conn->query($sql)){
            echo "<script>alert('registration successfull')</script>";
            header("location:index.php");
            
        }
        else{
            echo "error".$conn->error;
        }
        $conn->close();


?>