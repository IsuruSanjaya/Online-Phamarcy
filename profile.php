<?php
	
	//Linking the configuration file
	require 'config.php';
	//include 'login.php';
	


$sql = "SELECT * FROM users";
$result = $con->query($sql);



?>

<!DOCTYPE html>
<html>
	<head>
	
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
     
		<link rel="stylesheet" type="text/css" href="styles\style.css" >
		<title>My Shopping Cart</title>
		
		
		<style>
		button{
			  background-color: #00ff99;
			  border: none;
			  color: white;
			  padding: 16px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 20px;
			  margin: 4px 2px;
			  transition-duration: 0.4s;
			  cursor: pointer;
			  border-radius: 10px;
		}	

		button {
			  background-color: white; 
			  color: black; 
			  border: 2px solid black;
}	
		button:hover{
			background: #933952;

			color:white;
		}	


		div.kotuwa{
		width: 50%;
	    padding: 8px 10px;
	    font-size: 15px;
	    font-family:sans-serif;
	    font-weight:bold;
	    border: 3px solid black;
	    background:  white;
	    color: black;
	 
	    border-radius: 10px;
	  
}
		
		</style>
	</head>
	<body>

	<img class="logo" src="images/medilogo.jpg" align= "left">
	<a href="homepage.php"><img class ="loginpic" src="images/login.jpg"  width="100" height="100" align="right" alt=""></a>
		<center>
	
		<h1 class="h1" style="font-size:80px" >MEDISERVE</h1>
						
		</center>
		
	<div class="header" >
	    <div class="logos">
        
        </div
        <div class="navbar-up">
        <a href="loginmain.php" style="font-size:26px"><input type="button" class="btn" value="Login" style=""></a><br>
		<a href="regform.php" style="font-size:26px"><input type="button" class="btn" value="Register"></a><br>
        </div>
        
  </div>
		
	
		<hr class="bar">
		<div>
		
			<ul class="nav">
				<li class="nlist"><a href="homepage.php">Home</a></li>
				<li class="nlist"><a href="category.php">Category</a></li>
				<li class="nlist"><a href="loginmain.php">Login</a></li>
				<li class="nlist"><a href="contact.php">Contact us</a></li>
				<li class="nlist"><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		
		
    
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <br>
    <?php
	
		session_start();
		
		$fname=$_SESSION['fname'];
		$password=$_SESSION['password'];
		$lname=$_SESSION['lname'];
		$number=$_SESSION['number'];
		$mail=$_SESSION['mail'];
		$address=$_SESSION['address'];
		
		echo "<center><div class='kotuwa'><p style='font-size:30px; font-family:sans-serif;'>User name : ".$fname." ".$lname."<br><br>";
		echo "Contact Number : ".$number."<br><br>";
		echo "E-mail : ".$mail."<br><br>";
		echo "Address : ".$address."</p><br><br></div></center>";
		
		echo "<center><a href='category.php'><button style='lbtn'>Continue Shopping</button></a>";
		if (isset($_SESSION['fname']) && isset($_SESSION['password'])) {
		echo "<a href='logout.php'><button style='lbtn'>Logout</button></a></center>";
		}		
	else{
			 header("Location: loginmain.php");
		}

				
	?>

	<center><a href='prescription.php'><button style='lbtn'>Upload Prescription</button></a></center>
	
	
	
		
		</div>
		<br>
	
	
	
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

<?php

	
	$con->close();

?>