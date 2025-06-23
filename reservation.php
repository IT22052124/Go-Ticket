<?php 
require 'config.php';

$query ="SELECT DISTINCT RouteID, RName FROM  bus b, route r where b.RouteID = r.Route_id order by RName ASC";
$result = $conn->query($query);
if($result->num_rows> 0){
$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<html>
    <head>
        <title> Reserve a Ticket </title>

        <script>

          
            function validate(){
              
             var count = document.querySelectorAll("#myseat :checked").length;
             var seat= document.getElementById("count").value;
             if (seat!=count){
              alert("Select "+seat+" seats");
              return false;
             }
            }

      </script>
        <link rel="stylesheet" href="styled.css">
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
            <h1 id="heading"> Book Your Tickets </h1>
            
            <div class="form-main">
            <form method="POST" action="">
                  <div class="left-form">
                  <label for="RID" class="label">Route</label>
                    <select name="RID1" class="input" onchange="this.form.submit()"required>
   
  <?php 
  foreach ($options as $option) {
  ?>
    <option value="<?php echo $option['RouteID'];?>" <?php if(isset($_POST['RID1'])){ if($option['RouteID'] == $_POST['RID1']){ echo "selected";} }?>><?php echo $option['RName'];?> </option>
    <?php 
    }
   ?>
                    </select></form>
                    <form name="myform" class="form" method="post" action="payment.php">
                    <div id="myseat"  class="right-form">
                      <p class="selseat">Select Seats<br></p>
                    
                      <input  type="checkbox" id="s1" name="s1[]" value="s1"> <label for="s1">1</label>
                      <input  type="checkbox" id="s2" name="s1[]" value="s2"> <label for="s2">2</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s3" name="s1[]" value="s3"> <label for="s3">3</label>
                      <input  type="checkbox" id="s4" name="s1[]" value="s4"> <label for="s4">4</label>
                      <input  type="checkbox" id="s5" name="s1[]" value="s5"> <label for="s5">5</label><br>
                      <input  type="checkbox" id="s6" name="s1[]" value="s6"> <label for="s6">6</label>
                      <input  type="checkbox" id="s7" name="s1[]" value="s7"> <label for="s7">7</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s8" name="s1[]" value="s8"> <label for="s8">8</label>
                      <input  type="checkbox" id="s9" name="s1[]" value="s9"> <label for="s9">9</label>
                      <input  type="checkbox" id="s10" name="s1[]" value="s10"> <label for="s10">10</label><br>
                      <input  type="checkbox" id="s11" name="s1[]" value="s11"> <label for="s11">11</label>
                      <input  type="checkbox" id="s12" name="s1[]" value="s12"> <label for="s12">12</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s13" name="s1[]" value="s13"> <label for="s13">13</label>
                      <input  type="checkbox" id="s14" name="s1[]" value="s14"> <label for="s14">14</label>
                      <input  type="checkbox" id="s15" name="s1[]" value="s15"> <label for="s15">15</label><br>
                      <input  type="checkbox" id="s16" name="s1[]" value="s16"> <label for="s16">16</label>
                      <input  type="checkbox" id="s17" name="s1[]" value="s17"> <label for="s17">17</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s18" name="s1[]" value="s18"> <label for="s18">18</label>
                      <input  type="checkbox" id="s19" name="s1[]" value="s19"> <label for="s19">19</label>
                      <input  type="checkbox" id="s20" name="s1[]" value="s20"> <label for="s20">20</label><br>
                      <input  type="checkbox" id="s21" name="s1[]" value="s21"> <label for="s21">21</label>
                      <input  type="checkbox" id="s22" name="s1[]" value="s22"> <label for="s22">22</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s23" name="s1[]" value="s23"> <label for="s23">23</label>
                      <input  type="checkbox" id="s24" name="s1[]" value="s24"> <label for="s24">24</label>
                      <input  type="checkbox" id="s25" name="s1[]" value="s25"> <label for="s25">25</label><br>
                      <input  type="checkbox" id="s26" name="s1[]" value="s26"> <label for="s26">26</label>
                      <input  type="checkbox" id="s27" name="s1[]" value="s27"> <label for="s27">27</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s28" name="s1[]" value="s28"> <label for="s28">28</label>
                      <input  type="checkbox" id="s29" name="s1[]" value="s29"> <label for="s29">29</label>
                      <input  type="checkbox" id="s30" name="s1[]" value="s30"> <label for="s30">30</label><br>
                      <input  type="checkbox" id="s31" name="s1[]" value="s31"> <label for="s31">31</label>
                      <input  type="checkbox" id="s32" name="s1[]" value="s32"> <label for="s32">32</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s33" name="s1[]" value="s33"> <label for="s33">33</label>
                      <input  type="checkbox" id="s34" name="s1[]" value="s34"> <label for="s34">34</label>
                      <input  type="checkbox" id="s35" name="s1[]" value="s35"> <label for="s35">35</label><br>
                      <input  type="checkbox" id="s36" name="s1[]" value="s36"> <label for="s36">36</label>
                      <input  type="checkbox" id="s37" name="s1[]" value="s37"> <label for="s37">37</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s38" name="s1[]" value="s38"> <label for="s38">38</label>
                      <input  type="checkbox" id="s39" name="s1[]" value="s39"> <label for="s39">39</label>
                      <input  type="checkbox" id="s40" name="s1[]" value="s40"> <label for="s40">40</label><br>
                      <input  type="checkbox" id="s41" name="s1[]" value="s41"> <label for="s41">41</label>
                      <input  type="checkbox" id="s42" name="s1[]" value="s42"> <label for="s42">42</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="checkbox" id="s43" name="s1[]" value="s43"> <label for="s43">43</label>
                      <input  type="checkbox" id="s44" name="s1[]" value="s44"> <label for="s44">44</label>
                      <input  type="checkbox" id="s45" name="s1[]" value="s45"> <label for="s45">45</label><br>
                      <input  type="checkbox" id="s46" name="s1[]" value="s46"> <label for="s46">46</label>
                      <input  type="checkbox" id="s47" name="s1[]" value="s47"> <label for="s47">47</label>
                      <input  type="checkbox" id="s48" name="s1[]" value="s48"> <label for="s48">48</label>
                      <input  type="checkbox" id="s49" name="s1[]" value="s49"> <label for="s49">49</label>
                      <input  type="checkbox" id="s50" name="s1[]" value="s50"> <label for="s50">50</label>
                      <input  type="checkbox" id="s51" name="s1[]" value="s51"> <label for="s51">51</label><br>
                    
                    </div>
                    <br>
                    <label class="label">Date</label>
                    <input type="date" name="idate1" id="dateid" class="input" required>
                    <label class="label">Time</label>
                    <select name="time" class="input" required>
                      <option>08:00 AM</option>
                      <option>12:00 PM</option>
                      <option>05:00 PM</option>
                    </select><br>
                    <label class="label">Passenger Count</label>
                    <input type="text" id="count" name="count" id="passangerc" class="input" placeholder="eg:3" pattern="[0-9]" required><br>
                    <?php 
                    if(isset($_POST['RID1'])){

                      $rid = $_POST['RID1'];
                      $sql = "select DISTINCT Types from bus where RouteID = '$rid' ";
                      $result = $conn->query($sql);
                    if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                      
                      if($row['Types'] == 'A/C'){
                    
                    echo "<input type=\"radio\" name=\"type1\" class=\"radio\" value=\"A/C\" required><b class=\"AC\">A/C</b><br><br>";}
                    if($row['Types'] == 'NON A/C'){
                    echo "<input type=\"radio\" name=\"type1\" class=\"radio\" value=\"NON A/C\"><b class=\"AC\">Non-A/C</b><br><br>";}
                    }}}?>
                  
                   <input type="hidden" name="rid2" value="<?php if(isset($_POST["RID1"])){echo $_POST["RID1"];}?>">
                    <label class="label">E-mail</label>
                    <input type="text" name="mail" class="input" placeholder="mail@gmail.com" required><br>
                    <label class="label">Mobile No</label>
                    <input type="text" name="mobile" class="input" id="mob" placeholder="07X-XXXXXXX" pattern="[0]{1}[0-9]{9}" required><br>
                    <input type="submit"  name="reserve" class="reservebtn" value="Reserve Ticket" onclick="return validate()">

                    
                  </div>

                   
                </form>
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