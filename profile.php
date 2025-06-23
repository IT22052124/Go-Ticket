
<?php

session_start();
require'config.php';


?>
<html>
<head>
    <script type="text/javascript" src="js/profile.js"></script>
<style>
.ii{
    display:block;
   margin-left:auto;
   margin-right:auto;
    height:300px;
    width:300px;
}
hr{
    border-color:green;
}
h4{
    font-family:calibri; 
    font-size:larger;
    align-items:center;
    justify-content:center;
    text-align:center;
}


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.bus{
    margin-top: 20px;
    height: 10%;
    margin-bottom: 20px;
    margin-left: 30px;
}

.side-nav{
    background-color: #b63723;
    width: 250px;
    height: 750px;
    font-size: 25px;
    float:left  
    
}

.side-nav li:hover{
    background-color: #440202;
}


.side-nav li{
    padding-top: 10px;
    padding-bottom: 10px;
    list-style-type: none;
    padding-left: 5%;
    
}

#profile{
  background-color: rgb(186, 167, 229);
}

#cancelReservation{
  font-size: 20px;
}

.side-nav span{
  color: #fff;
}
.side-nav li a{
    text-decoration: none;
    color: white;
}

.icon{
    margin-right: 4%;
    width: 25px;
    height: 25px;
}

.btn{
    width:100px;
    border-radius:20px;
    height: 50px;
    color:white;
    background-color:black;
}
.btn:hover{
    background-color:blue;
}

</style>



</head>

<body>
    <?php
    $x = $_SESSION['name'];

    $sql="SELECT username,email,city,mobile_no from registration where username = '$x'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $_SESSION['Email']=$row['email'];
            $_SESSION['City']=$row['city'];
            $_SESSION['Mobile']=$row['mobile_no'];
           
        }

    }
    
    ?>
     
        <div class="side-nav">
            <img class="bus" src="src/images/bus.png">
            <ul>
                <li id="profile"><a href="profile.php"><img  class="icon" src="src/images/profile.png"><span>Profile</span></a></li>
                <li id="Reservation"><a href="reservation.php"><img class="icon" src="src/images/ticket.png">Reservation</a></li>
                <li id="cancelReservation"><a href="cancelReservation.php"><img class="icon" src="src/images/cancel.png">Cancel Reservation</a></li>
                <li><a><img class="icon" src="src/images/payment.png">Payments</a></li>
                <li><a href="fdback.html"><img class="icon" src="src/images/review.png">Reviews</a></li>
				<li id="log"><a href="index.php"><img class="icon" src="image/log.png">Log Out</a></li>
 </ul>
</div>





<img  class="ii"src="src/images/profile.jpg">
<hr class="rhr"><hr>
<h4>User Name : <?php echo $_SESSION['name'];?> </h4><br>
<h4>Phone No: <?php echo $_SESSION['Mobile'];?></h4><br>
<h4>City : <?php echo $_SESSION['City'];?></h4><br>
<h4>Email: <?php echo $_SESSION['Email'];?></h4><br>
<hr><br><br>
<center><input class="btn"type="button"onclick="buttons('edit')" value="edit profile">&nbsp;&nbsp;&nbsp;
<input type = "button" class="btn" value ="logout" onclick="buttons('logout')"> &nbsp;&nbsp;&nbsp;<input type="button" class="btn" onclick="buttons('goback')"value="go back">
<center>
    


</body>



</html>