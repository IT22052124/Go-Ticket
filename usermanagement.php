<?php
require'config.php';

?>


<html> 
    <head>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items: center;
            height:100vh;
            margin 0;

        }


    </style>

    </head>
    <body>
        <div>
        <img src="src/images/profile.jpg" width="200px" height="200px"><table border="1">
            <tr>
                <th>user ID</th>
                <th>user Name</th>
                <th>City</th>
                <th>email</th>
                <th>Phone_n</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
<?php

$sql = "select user_id,username,city,email,mobile_no  from registration";
$result = $conn->query($sql);

if($result->num_rows>0){

    while($row = $result->fetch_assoc()){

        echo "<tr><td>".$row['user_id']."</td>".
         "<td>".$row['username']."</td>".
         "<td>".$row['city']."</td>".
         "<td>".$row['email']."</td>".
         "<td>".$row['mobile_no']."</td>
         <td><a href='edituser.php?id=$row[user_id]
         &username=$row[username]
         &city=$row[city]
         &email=$row[email]
         &qmobile=$row[mobile_no]'>Edit</a></td>

         <td><a href='deleteuser.php?id=$row[user_id]'>delete</a></td></tr>";
         
         
        
         
    }
    
    }
    else{
        echo"no records found !";
}

  $conn->close();


    ?>
    
</body>
</html>