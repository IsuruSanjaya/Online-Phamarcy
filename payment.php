<!DOCTYPE html>
<html>
	<head>
		<style>
        body{
        background: rgb(201,107,5);
        background: linear-gradient(90deg, rgba(201,107,5,1) 0%, rgba(86,0,168,1) 100%);
        }

		</style>
	
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


     
	<link rel="stylesheet" type="text/css" href=" styles\style.css" >
	<title>My Shopping Cart</title>
	</head>
	<body>

	<img class="logo" src=" images/medilogo.jpg" align= "left">
	<a href="homepage.html"><img class ="loginpic" src=" images/login.jpg"  width="100" height="100" align="right" alt=""></a>
		<center>
		
		
		<h1 class="h1" style="font-size:70px" >MEDISERVE</h1>
						
		</center>
		
	<div class="header" >
	<div class="navbar-up">
        <a href="login.html" style="font-size:26px"><input type="button" class="btn" value="Login" style=""></a><br>
		<a href="Reg.form.html" style="font-size:26px"><input type="button" class="btn" value="Register"></a><br>
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
	</div>		
	
	<br><br>
	
	<div class="payment">
	    <p> Home > Profile > <font color= "#808080" >Payment</font> </p>
	</div><br><br>
	

	
	<br>
	
	<div>
	    <form  name="payment" action="php/payment.php" method="POST" class="form2"
		 <p><b>Delivery Address : </b> </p><br>
	        
			<input type="text" name ="adress"   class="addressbox"><br><br>

 
	        <p><b>Delivery Option : </b></p><br>
	        
			<input type="checkbox" id="1" name="way" value="Leave at door" checked class="option"><text class="option-text">Leave at door</text> <br>
	        <input type="checkbox" id="2" name="way" value="Meet at door" class="option"><text class="option-text">Meet at door</text> <br>
	        <input type="checkbox" id="3" name="way" value="Meet outside" class="option"><text class="option-text">Meet outside </text> <br>
	    		 
			<p><b><center>Credit/Debit Card</b></center></p><br>
	       
		   <input type="text" name="cardname" placeholder="Card holder's Name" class="paybox"><br><br><br>
	        
			<input type="text" name="cardno" placeholder="Card Number" class="paybox"><br>
	
	        <p><b>Expiry</b></p><br>
	        <input type="month" name="exp" class="expiry"><br>
	
	
	        <input type="number" id="field" max="999"min="000" pattern="([0-9]|[0-9]|[0-9])" name="cvc" class="cvc" placeholder="CVC"><br>
	
	        <img src="images/lock.png" class="lock">
	     
	
	        <div>
	            <img src="images/visa.jpg" class="card1">
	            <img src ="images/mastercard.png" class="card2">
	            <img src="images/american.jpg " class="card3">
	            <img src="images/discover.jpg " class="card4">
	        </div>
			   
            <input type="submit" value="Pay Now" class="submit">
	    
		</form>
	</div>
	
	
	
	
	
	
			
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