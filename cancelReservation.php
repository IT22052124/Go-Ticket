<?php
  session_start();
	require 'config.php';
?>

<html>
    <head>

        <title> Cancel a Reserved Ticket </title>

        <script type="text/javascript" src="javascript.js"></script>
        <link rel="stylesheet" href="styleCancel.css">
        <style>
	
      div.scroll {
        background-color: #fff;
        width: 100%;
        height: 86%;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center;
        padding: 20px;
      }
    
	</style>
    </head>
    <body>
        <div class="side-nav">
            <img class="bus" src="image/bus.png">
            <ul>
                <li><a href="profile.php"><img class="icon" src="image/profile.png">Profile</a></li>
                <li id="Reservation"><a href="reservation.php"><img class="icon" src="image/ticket.png">Reservation</a></li>
                <li id="cancelReservation"><a href="cancelReservation.php"><img class="icon" src="image/cancel.png"><span>Cancel Reservation</span></a></li>
                <li><a><img class="icon" src="image/payment.png">Payments</a></li>
                <li><a href="fdback.html"><img class="icon" src="image/review.png">Feedback</a></li>
				<li id="log"><a href="index.php"><img class="icon" src="image/log.png">Log Out</a></li>
			</ul>
        </div>
        <div class="main"> 
        <h1 id="heading"> Cancel Reservation </h1>
            
        <div class="tab">
        <div class="scroll">
        <table >
				<tr>
					<th>Ticket ID</th>
          <th>User ID</th>
					<th>Route ID</th>
					<th>Date</th>
					<th>Time</th>
          <th>Passenger Count</th>
					<th>Seat Number</th>
					<th>Bus Type</th>
					<th>E-mail</th>
					<th>Phone No</th>
					<th>Cancel Reservation</th>	
				</tr>
				
				<?php
        $user = $_SESSION['name'];
				$sql= "select * from reservation r, registration rs where  (rs.user_id = r.U_id) AND username = '$user' ";
				$result = $conn->query($sql);
				
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
						
						echo "<tr>
								<td>".$row["T_ID"]."</td>
                <td>".$row["U_id"]."</td>
								<td>".$row["R_id"]."</td>
								<td>".$row["T_Date"]."</td>
								<td>".$row["T_Time"]."</td>
                <td>".$row["Pas_Count"]."</td>
								<td>".$row["Seat_No"]."</td>
								<td>".$row["T_Type"]."</td>
								<td>".$row["T_Mail"]."</td>
								<td>".$row["T_Mobile"]."</td>";


								echo "<td><a href='submitCancelReservation.php?id=$row[T_ID]' onClick=\"return confirm('Do you want to cancel the reservation?')\">Cancel Reservation </a></td>
							  </tr>";


					}
				}
				
				?>
				
			</table>
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