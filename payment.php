<?php
session_start();
require "config.php";

$uname =$_SESSION['name']; 
$ir= $_POST['rid2'];
$idate= date('Y-m-d', strtotime($_POST['idate1']));
$itime = $_POST['time'];
$pcount= $_POST['count'];
$itype= $_POST['type1'];
$imail= $_POST['mail'];
$imobile= $_POST['mobile'];
$abc = $pcount;
$checkbox1=$_POST['s1'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1."  ";  
   }  

$sql= "INSERT INTO reservation(U_id ,R_id, T_Date, T_Time, Pas_Count, T_Type, T_Mail, T_Mobile, Seat_No, charges , Rname) VALUES((select user_id from registration where username = '$uname') ,'$ir', '$idate', '$itime', '$pcount', '$itype', '$imail', '$imobile', '$chk' ,(select Charges from bus where RouteID = '$ir' AND Types = '$itype' order by bd desc LIMIT 1),(select Rname from route where Route_id = '$ir'))";
if($conn->query($sql)){
}
else{
	echo "Error:". $conn->error;
}

$query ="SELECT T_ID, R_id, T_Date, T_Time, Pas_Count, T_Type, T_Mail, T_Mobile, Seat_No, charges , Rname FROM reservation order by T_ID desc LIMIT 1";
$result = $conn->query($query);
if($result->num_rows> 0){
$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<html>
    <head>
        <title> Payment </title>

        <script type="text/javascript" src="javascript.js"></script>
        <link rel="stylesheet" href="stylepayment.css">
    </head>
    <body>
        <div class="side-nav">
            <img class="bus" src="image/bus.png"> Gotickets
            <ul>
                <li><a href="profile.php"><img class="icon" src="image/profile.png">Profile</a></li>
                <li id="Reservation"><a href="reservation.php"><img class="icon" src="image/ticket.png"><span>Reservation</span></a></li>
                <li id="cancelReservation"><a href="cancelReservation.php"><img class="icon" src="image/cancel.png">Cancel Reservation</a></li>
                <li><a><img class="icon" src="image/payment.png">Payments</a></li>
                <li ><a href="fdback.html"><img class="icon" src="image/review.png">Feedback</a></li>
				<li id="log"><a href="index.php"><img class="icon" src="image/log.png">Log Out</a></li>
			</ul>
        </div>
        <div class="main">
            <h1 id="heading"> Payment </h1>
            
            <div class="form-main" >
            <div class="receipt">

            <?php foreach ($options as $option) ?>

            <span style="font-size: 20px; color: #8B8E98; font-weight: 600;" >Reservation ID : <?php echo $option['T_ID'];?><br>
            Route Name :  <?php echo $option['Rname'];?><br>
            Route ID : <?php echo $option['R_id'];?> <br>
            Date :<?php echo $option['T_Date'];?> <br>
            Time : <?php echo $option['T_Time'];?><br>
            Bus Type : <?php echo $option['T_Type'];?><br>
            Seat Number/s : <?php echo $option['Seat_No'];?><br>
            No. of Passenger : <?php echo $option['Pas_Count'];?><br><br>
      
            <b>Amount :  RS <?php echo $option['charges']*$GLOBALS['abc'];?>.00</b></span>
            
            
            </div>
            <br>
            <form method="post" action="CardPayment.php">
              <input type="hidden" name="pid" value="<?php echo $option['charges']*$GLOBALS['abc'];?>">
              <input type="hidden" name="tidd" value="<?php echo $option['T_ID'];?>">
              <button type="submit" >Pay By Card </button>
            <?php } ?>
            </div>

        </div>



        <footer>
            <div class="row primary">
              <div class="column about">
                <h3>ChocoBois Developer</h3>
                <p>
                  Gotickets is developled to make your Jornerey bookings do easier through our website
    
                </p>
                          <div class="social">
                            <i class="fa-brands fa-facebook-square"></i>
                            <i class="fa-brands fa-instagram-square"></i>
                            <i class="fa-brands fa-twitter-square"></i>
                <i class="fa-brands fa-youtube-square"></i>
                  <i class="fa-brands fa-whatsapp-square"></i>
                          </div>
              </div>
              <div class="column links">
                <h3>Follow Us</h3>
                <ul>
                  <li>
                    <a href="#faq">facebook</a>
                  </li>
                  <li>
                    <a href="#cookies-policy">twitter</a>
                  </li>
                  <li>
                    <a href="#terms-of-services">Instagram</a>
                  </li>
                  <li>
                    <a href="#support">Whatsapp</a>
                  </li>
      
                </ul>
              </div>
                <div class="column links">
                  <h3>About Us</h3>
                  <ul>
                    <li>
                      <a href="#faq">F.A.Q</a>
                    </li>
                    <li>
                      <a href="#cookies-policy">Cookies Policy</a>
                    </li>
                    <li>
                      <a href="#terms-of-services">Terms Of Service</a>
                    </li>
                    <li>
                      <a href="#support">Support</a>
                    </li>
      
                  </ul>
                </div>
              <div class="column subscribe">
                <h3>Newsletter</h3>
                <div>
                  <input class="finput" type="email" placeholder="Your email id here" />
                  <button>Subscribe</button>
                 
                </div>
                
      
              </div>
             
            </div>
            <div class="row copyright">
                <p>Copyright &copy; 2023 SLIIT Developer</p>
              </div>
           
        </footer>
    



        

    </body>




</html>