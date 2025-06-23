<?php
require 'config.php';

$ab = $_POST['ppp'];
$cd = $_POST['tdd'];

$date = date('Y-m-d');
$time = date('H:i:s');




$sql= "INSERT INTO Payment(P_id,R_id, Date, Time, Amount) VALUES('', (select T_id from reservation order by T_id desc limit 1) , '$date' , '$time' ,'$ab')";
if($conn->query($sql)){
}
else{
	echo "Error:". $conn->error;
}

$query ="SELECT * FROM Payment order by P_id desc LIMIT 1";
$result = $conn->query($query);
if($result->num_rows> 0){
$options= mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
<html>
    <head>
        <title> Payment </title>

        <script type="text/javascript" src="javascript.js"></script>
        <link rel="stylesheet" href="stylepayments.css">
    </head>
    <body>
        <div class="side-nav">
            <img class="bus" src="image/bus.png"> 
            <ul>
                <li><a href="profile.php"><img class="icon" src="image/profile.png">Profile</a></li>
                <li id="Reservation"><a href="reservation.php"><img class="icon" src="image/ticket.png"><span>Reservation</span></a></li>
                <li id="cancelReservation"><a href="cancelReservation.php"><img class="icon" src="image/cancel.png">Cancel Reservation</a></li>
                <li><a><img class="icon" src="image/payment.png">Payments</a></li>
                <li><a href="fdback.html"><img class="icon" src="image/review.png">Feedback</a></li>
				<li id="log"><a href="index.php"><img class="icon" src="image/log.png">Log Out</a></li>
			</ul>
        </div>
        <div class="main">
            <h1 id="heading"> Payment Receipt </h1>
            
            <div class="form-main" >
            <div class="receipt">
          
        <p class="para">Payment Successful</p>
        <?php foreach ($options as $option) ?>
		<p class="para">Payment ID : <?php echo $option['P_id'];?></p>
		<p class="para">Date: <?php echo $option['Date'];?></p>
		<p class="para">Time: <?php echo $option['Time'];?></p>
		<p class="para">Reservation ID : <?php echo $option['R_id'];?></p>
		<p class="para">Amount : RS <?php echo $option['Amount'];?>.00</p>
    <?php } ?>
      <a href="reservation.php" class="button" id="s_button">BYE !</a>
      </div>
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