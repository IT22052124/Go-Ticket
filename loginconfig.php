<?php
session_start();
$_SESSION['name']=$_POST['username'];


$Username = $_POST['username'];
$Password = $_POST['password'];

$con = new mysqli("localhost","root","","GoTickets");

if($con->connect_error){
    die("connecction failed :".$con->connect_error);
}
else{
  
$stmt = $con->prepare("select * from registration where username = ?");
$stmt->bind_param("s",$Username);
$stmt->execute();
$stmt_result = $stmt->get_result();

if($stmt_result->num_rows>0){

  $data = $stmt_result->fetch_assoc();
  if($data['password'] === $Password){
    echo"login successfull";
    echo"<center><h2> welcome ". $_SESSION['name']."</h2></center>";
    header("Location:reservation.php");

  }
  else{
    echo"invalid username or password";
  }

}
else{
    echo"<h2>invalid email adsress or password</h2>";
}


}





?>