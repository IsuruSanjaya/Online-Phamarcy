<!DOCTYPE html>
<html>
	<head>
	
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
     
		<link rel="stylesheet" type="text/css" href="styles\style.css" >
		<script src="js/myscript.js"></script>
		<title>My Shopping Cart</title>
	</head>
	<body>

	<img class="logo" src="images/medilogo.jpg" align= "left">
	<a href="profile.php"><img class ="loginpic" src="images/login.jpg"  width="100" height="100" align="right" alt=""></a>
		<center>
		
		
		<h1 class="h1" style="font-size:70px" >MEDISERVE</h1>
						
		</center>
		
	<div class="header" >
	    <div class="logos">
        
        </div
        <div class="navbar-up">
        <a href="loginmain.php" style="font-size:26px"><input type="button" class="btn" value="Login" style=""></a><br>
		<a href="Regform.php" style="font-size:26px"><input type="button" class="btn" value="Register"></a><br>
        </div>
        
  </div>
		
	
		<hr class="bar">
		<div>
		
			<ul class="nav">
				<li class="nlist"><a href="homepage.php">Home</a></li>
				<li class="nlist"><a href="indexcato.php">Category</a></li>
				<li class="nlist"><a href="loginmain.php">Login</a></li>
				<li class="nlist"><a href="contact.php">Contact us</a></li>
				<li class="nlist"><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		
		
    
  <!-- Page Wrapper -->
  <div class="page-wrapper">
  
  
<form class="signup" action="reg.php" method="post" onsubmit="return checkPassword()">
<h3 style="font-family:sans-serif;">

<div class="wrapperf">
	<div class="titlef">
	Registration Form
	</div>
	<div class="formf">
		<div class="inputs f">
			<lable>First Name:</lable>
			<input style="font-family:sans-serif; font-size:15px;" type="text" class="inputf" name="firstname" placeholder="First Name" required>
		</div>
		<div class="inputs f">
			<lable>Last Name:</lable>
			<input style="font-family:sans-serif; font-size:15px;" type="text" class="inputf" name="lastname" placeholder="Last Name" required><br/>
		</div>
		<div class="inputs f">
			<lable>Gender:
			<input type="radio" name="gender" value=1 checked>Male
			<input type="radio" name="gender" value=0>Female<br/>
			</lable>
		</div>
		
		<div class="inputs f">
			<lable>Mobile Number:</lable>
			<input style="font-family:sans-serif; font-size:15px;" type="phone" class="inputf" name="mobile" pattern="[0-9]{10}" placeholder="0123456789" required><br/>
		</div>
		<div class="inputs f">
			<lable>Email:<b/lable>
			<input style="font-family:sans-serif; font-size:15px;" type="email" class="inputf" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9.]+@[a-z0-9]+\.[a-z]{2,3}]"required><br/>
		</div>
		<div class="inputs f">
			<lable>Home Address:</lable><br>
			<textarea  name="address" rows="8" cols="50" class="textarea" placeholder="Delivary location" required></textarea><br/>
		</div>
		<div class="inputs f">
			<lable>DOB:</lable>
			<input type="date" class="inputf" name="day" required>
			<br/>
		</div>
		<div class="inputs f">	
			<lable>Password:</lable>
			<input type="password" name="password" class="inputf" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autofocus required title="Please enter at least 6 characters , Use upper and lower case characters , Use 1 or more numbers" required"><br/>
		</div>
		<div class="inputs f">
			<lable>Re-Enter Password:</lable>
			<input type="password" class="inputf" id="cnfrmpwd" required>
		</div>
		<br>
		
		
	<center>
	<div class="inputs">
	<input class="btn" type="submit" id="submitBtn" value="Submit">
	<br>
	<a href=""><p style="font-family:sans-serif; font-size:15px;">Already Have an account?</p></a>
	</center>
	</div>
	</div>
	</div>
</div>
</h3>
</form>

<hr class="bar">


	<!-- footer -->
  <div class="footer">
    <div class="footer-content">
	
	  

      <div class="footer-section about">
        <h1 class="logo-text"><span>MEDI</span>SERVE</h1>
		<h2></h2>
        <br>
        <ul>
          <a href="#">
            <li>Service</li>
          </a>
          <a href="#">
            <li>About us</li>
          </a>
          <a href="#">
            <li>Contact us</li>
          </a>
         
        </ul>
      </div>
        
    

      <div class="footer-section links">
        <h2></h2>
        <br>
        <ul>
          <p>HOURS OF OPERATION</p>
		   <p>orders will be delivered within 24 hours</P>
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>More</h2>
        <br><p>Contact with us</p>   
		<img src="images\icon.png" width="150" height="150" >
		
      </div>

    </div>

    <div class="footer-bottom">
      &copy; All rights reserved .2021 Mediserve Pvt Ltd 
    </div>
  </div>
  <!-- // footer -->
	
		
		
		
		

		
		
						
		
	</body>
</html>
 