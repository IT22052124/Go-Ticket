<?php 
require 'config.php';
$rid   = $_GET['RID1'];
$sql = "SELECT Route_id, RName, DepartureL, DestinationL , Distance , Description FROM route WHERE Route_id ='$rid'";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en" lang="en>
<head>
    
    <title> Dashboard </title>
    <script type="text/javascript" src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
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
            <a href="Editroute.php" class="active">
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
                <span class="dashboard">&emsp;Edit Route</span>
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
            <form class="form" action="submiteditroute2.php" method="POST" >
            <div class="input_container">
                <?php if ($result->num_rows > 0){

                    while ($row = $result->fetch_assoc()){
                ?>
                    <label for="RID">Route ID : <?php echo $row["Route_id"];?></span></label>
                    <input type="hidden" name="iddd" value="<?php echo $row["Route_id"];?>">
                <div class="input_container">
                    <label class="input_label">Route Name :</label>
                    <input class="input_field" type="text" name="Rname" value="<?php echo $row["RName"];?>" required>
                </div>
                <div class="input_container">
                    <label class="input_label">Departure location :</label>
                    <input class="input_field" type="text" name="RDeparture" value="<?php echo $row["DepartureL"];?>" required>
                </div>
                <div class="input_container">
                    <label class="input_label">Destination location :</label>
                    <input class="input_field" type="text" name="RDestination" value="<?php echo $row["DestinationL"];?>" required>
                </div>
                <div class="input_container">
                    <label  class="input_label">Distance :</label>
                    <input  class="input_field" type="text" name="RDistance" value="<?php echo $row["Distance"];?>" required>
                </div>
                <div class="input_container">
                    <label class="input_label">Route Description :</label>
                    <input  class="input_field" type="text" name="RDescription" value="<?php echo $row["Description"];?>">
                </div>
                <button type="submit" onclick="return confirm('Do you want to Submit?')" > Submit</button>

            </form>
            <form method="post" action="submitdeleteroute.php">
            <input type="hidden" name="ridd" value="<?php echo $row["Route_id"];?>">
            <button type="submit" onclick="return confirm('Do you want to Delete?')"/>Delete</button>
            </form>
            <?php }
} else {
  echo "0 results";
}?>
                    
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
