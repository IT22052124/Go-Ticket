<?php
include 'showroutes.php';
?>
<!DOCTYPE html>
<html lang="en" lang="en>
<head>
    
    <title> Dashboard </title>
    <script type="text/javascript" src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylea.css">
</head>
<body>  
    <div class="sidebar" style="height:100%;">
        <div class="logo-details">
            <img src="image\bus.png">
            
        </div>
    <ul class="nav-links">
        <li>
            <a href="dashboard.php" class="active">
            <img src="images/icons8-dashboard-48.png">
            <span class="links_name"> &emsp;Dashboard</span>
            </a>
        </li>
        <li>
            <a href="Createroute.php">
                <img src="images/icons8-route-50.png">
            <span class="links_name"> &emsp;Create Route</span>
            </a>
        </li>
        <li>
            <a href="Editroute.php">
                <img src="images/icons8-modify-58.png">
            <span class="links_name"> &emsp;Edit Route</span>
            </a>
        </li>
        <li>
            <a href="vehicle.php">
                <img src="images/icons8-bus-station-50.png">
            <span class="links_name"> &emsp;Vehicle</span>
            </a>
        </li>
        <li>
            <a href="adminpayment.php">
                <img src="images/icons8-wallet-50.png">
            <span class="links_name"> &emsp;Payment</span>
            </a>
        </li>
        <li>
            <a href="adminfeedback.php">
                <img src="images/icons8-online-support-50.png">
            <span class="links_name"> &emsp;Feedback</span>
            </a>
        </li>
        
        <li class="log_out">
            <a href="index.php">
                <img src="images/icons8-log-out-50.png">
            <span class="links_name"> &emsp;Log out</span>
            </a>
        </li>
    </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">&emsp;Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search..." />
                
            </div>
            <div class="profile-details">
                <img src="images/admin.jpg" alt="" />
                <span class="admin_name">SURIYA</span>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Booking</div>
                    <?php 
					$sql = "select count(*) as total from reservation";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
					?>
	<div class="number"style="left:73px"><?php echo $row['total'];}}?></div>
                    
					<div class="indicator">
       
                    </div>
                </div>
                <img class="ico" src="images/icons8-man-50.png" >
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Users</div>
						<?php 
					$sql = "select count(*) as total from registration";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
					?>
	<div class="number" style="left:43px"><?php echo $row['total'];}}?></div>
                        <div class="indicator">
                       
                        </div>
                    </div>
                    <img class="ico one" src="images/icons8-booking-50.png" >
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Revenue</div>
							<?php 
					$sql = "select sum(Amount) as total from payment";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
					?>
	<div class="number"style="left:-23px"><?php echo "RS ".$row['total'].".00";?></div>
	
	<?php
	}}?>
                            <div class="indicator">
                            
                            </div>
                        </div>
                        <img class="ico two" src="images/icons8-profit-50.png" >
                        </div>
                        <?php 
                        $sql = "select count(*) as total from bus ";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){?>
                        <div class="box">
                            <div class="right-side">
                                <div class="box-topic">Total Buses</div>
                                <div class="number" style="left:43px"><?php echo$row['total'];}}?></div>
                                <div class="indicator">
                               
                                </div>
                            </div>
                            <img class="ico three" src="images/icons8-bus-50.png" >
                        </div>
            </div>
        <div class="det">
            <div class="recent-payment">
            <div class="title">Recent Payments</div>
            <div class="Payment-Details">
    <table class="tablestyle">
	<thead>
	<tr>
	<th>Payment ID</th>
	<th> Res_ID</th>
	<th>Date</th>
	<th>Time</th>
	<th>Amount</th>
	</tr>
	</thead>
	<?php
	$sql = "select * from payment order by P_id desc LIMIT 5";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			
			echo"<tr>
				<td>".$row["P_id"]."</td>
				<td>".$row["R_id"]."</td>
				<td>".$row["Date"]."</td>
				<td>".$row["Time"]."</td>
				<td>Rs ".$row["Amount"].".00</td>";
				
				
			
		}
		
	}

	?>
	</table>
                
            </div>
            <div class="button">
                <a href="adminpayment.php">See All</a>
            </div> 
            </div> 
        <div class="popular-routes">
            <div class="title">Popular Routes</div>
            <ul class="Popular-routes-details">
            <?php 
                foreach ($options as $option) {
                 ?>
                 <li>
                    <a href="Editroute.php">
                    <span class="Route"><?php echo $option['RName'];?> </span>
                    </a>
                </li>
                <?php 
                 }
                 ?>
                 <div class="button">
                <a href="Editroute.php">See All</a>
            </div>
            </ul>
        </div>
    </div>
    </section>
</body>
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
                <input type="email" placeholder="Your email id here" />
                <button>Subscribe</button>
            </div>
        </div>
    </div>
        <div class="row copyright">
        <p>Copyright &copy; 2023 SLIIT Developer</p>
        </div>
    </footer>
</html>
