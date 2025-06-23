<?php
require'config.php';

$ids = $_GET['id'];

$sql = "DELETE  from registration where user_id = '$ids'";

if($conn->query($sql)){
    echo "again you won mara";
    header("location:usermanagement.php");

}
else{
    echo"you lost mara";
}
$conn->close();
?>