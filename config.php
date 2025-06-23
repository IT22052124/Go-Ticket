<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname = "GoTickets"; 

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection

if($conn->connect_error){
    die("connection fails : ".$conn->connect_error);
}

?>