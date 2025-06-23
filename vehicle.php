<?php
	require "config.php"
?>

<!DOCTYPE html>
<html lang="en" lang="en>
<head>
    
    <title> Vehicle </title>
    <script type="text/javascript" src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylea.css">
    <style>
	
      div.scroll {
        background-color: #fff;
        width: 100%;
        height: 78%;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center;
        padding: 20px;
      }
    
	</style>
</head>
<body>  
    <div class="sidebar" style="height:100%;">
        <div class="logo-details">
            <img src="image\bus.png">
            
        </div>
    <ul class="nav-links">
        <li>
            <a href="dashboard.php" >
            <img src="images/icons8-dashboard-48.png">
            <span class="links_name"> &emsp;Dashboard</span>
            </a>
        </li>
        <li>
            <a href="Createroute.php" >
                <img src="images/icons8-route-50.png">
            <span class="links_name"> &emsp;Create Route</span>
            </a>
        </li>
        <li>
            <a href="Editroute.php" >
                <img src="images/icons8-modify-58.png">
            <span class="links_name"> &emsp;Edit Route</span>
            </a>
        </li>
        <li>
            <a href="vehicle.php" class="active">
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
                <span class="dashboard">&emsp;Vehicle</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search..." />
                
            </div>
            <div class="profile-details">
                <img src="images/admin.jpg" alt="" />
                <span class="admin_name">SURIYA</span>
            </div>
        </nav>
        <div class="Create-route">
            <br>
        <a href="vehicleadd.php">
    <button type="submit" >
    Add a new bus 
        </button>
    
    </a>
    <div class="scroll">
    <table class="tablestyle">
    <thead>
	<tr>
	<th>Bus Number</th>
	<th>Driver's Name</th>
	<th>RouteID</th>
	<th>Type</th>
	<th>Charge</th>
	<th>Update Bus</th>
	<th>Delete Bus</th>
	
	</tr>
    </thead>
	
	<?php
	$sql="select * from bus";
	$result=$conn->query($sql);
	
	if($result->num_rows >0){
		while($row=$result->fetch_assoc()){
			
			echo "<tr>
					<td>".$row["BusNO"]."</td>
					<td>".$row["Driver"]."</td>
					<td>".$row["RouteID"]."</td>
					<td>".$row["Types"]."</td>
					<td>".$row["Charges"]."</td>";
					
					echo"<td><a href='vehicleaddedit.php?&bnum1=$row[BusNO]
														&driv1=$row[Driver]
														&rid1=$row[RouteID]
														&type1=$row[Types]
														&charge1=$row[Charges]
														'>Edit</a></td>";
					
				echo"<td><a href='SubmitDeleteBus.php?bnum=$row[BusNO]'>Delete</a></td>";
				"</tr>";
			
		}
	}
?>
</table>
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
