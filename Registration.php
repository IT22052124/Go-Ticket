<html>
    <head>
        <link rel="stylesheet" href="styles/registration.css">
        <style>
            body{
                padding:0 ;
                margin:0 auto;
            }
        </style>
        
    </head>
    <body >

        <div class="dfg"></div>

        <div class="container">
            <h1 style="color:royalblue;">Register Now</h1>

<form  method="POST" action="submitregistration.php">

        
        <div class="aa">
         <br><input type="text" name="Firstname" placeholder=" Enter FirstName" required >&nbsp;&nbsp;&nbsp;&nbsp;
         
         
       
   <input type="text" name="Lastname" placeholder="Enter LastName"  ><br><br>

        <input type="email" name="email" placeholder="Enter Email Address" width=>&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="number" name="number" placeholder="Enter mobile number"><br><br>

        </div><p>
        Male <input type="radio" name="gender" value="male">&nbsp;Female<input type="radio" name="gender" value="female">&nbsp;others<input type="radio" name="gender" value="others">
</p>
            <div class="aa">
            <label>Address : </label><br><input type="text" name="Address" placeholder="Home No"><br>
            <input type="text" name="Address" placeholder="street" width="80%" >
            <br><input type="text" name="city" placeholder="city"cwidth="50%"><br><br></div> <div class="aa">

            <input type="text" name="username" placeholder="Create UserName" required><br><br> 

             <input type="password" class="dd" name="password" placeholder="Create New password" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="password" name="password" class="dd" placeholder="Confirm Password" required> 

<center>
   <br> <input type="submit" class="submit" value="Submit">
  

    <p class="signin">Already have an acount ? <a href="index.php">Signin</a> </p></center>
</form>
</div>
</body>
</html>