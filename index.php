<?php

require'config.php';


$cookie_name="SLIIT";
 $cookie_value="Students";
 setcookie($cookie_name, $cookie_value, time() + (86400*30),"/");


?>



<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="styles/Login.css">
        <script type="text/javascript" src="js/script.js"></script>
        <style>
            body{
              padding:0;
              margin:0 auto;
            }

        </style>
    </head>
    
    <body  >
    <?php
     if(!isset($_COOKIE[$cookie_name]))
     { echo"Cookie named '". $cookie_name."' is not set!"; }
      ?>
       
        <div id="header"><center><br><a href="index.php">Home</a>
            &nbsp;&nbsp;&nbsp;&nbsp; <a href="whatsnew.html">What's new</a>
            &nbsp;&nbsp;&nbsp;&nbsp; <a href="contactus.html">Contact us</a>
            &nbsp;&nbsp;&nbsp;&nbsp; <a href="Registration.php">Sign Up</a>
            &nbsp;&nbsp;&nbsp;&nbsp; <a href="contactus.html">About us</a></center>
           
            <br>
        </div>
        <div   class="leftlayout"></div>
       <div class="rightlayout"><center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">GoTickets.lk</h1><br><br><br><br>
        <form class="form" action="loginconfig.php" method="POST">
            <p class="form-title">Sign in to your account</p>
             <div class="input-container">
               <input type="username" placeholder="Enter username" id="username" name="username"required>
               <span>
               </span>
           </div>
           <div class="input-container">
               <input type="password" placeholder="Enter password" id="password" name="password" required>
             </div>
              <button type="Submit" class="submit"  >Sign in
           </button>
     
           <p class="signup-link">
             Dont Have an account?
             <a href="Registration.php">Register now</a>
           </p>
        </form></center>
    </div>

<!-- taken from a site -->
    <footer>
        <div class="row primary">
          <div class="column about">
            <h3>ChocoBois Developer</h3>
            <p>
            GoTickets is your reliable online platform for hassle-free public bus transport reservations. We aim to provide convenient and efficient travel solutions, connecting passengers with a vast network of routes and destinations. With our user-friendly interface, you can easily browse, select, and book your bus tickets from the comfort of your own home. Whether you're planning a solo adventure or a group trip, GoTickets ensures a seamless booking experience, allowing you to sit back, relax, and enjoy the journey. Trust us to be your go-to platform for convenient and affordable bus travel.
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
                <li>
                  <a href="adminlogin.php">login as admin</a>
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
    </body>
</html>