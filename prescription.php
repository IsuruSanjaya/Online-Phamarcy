<!DOCTYPE html>
<html>
	<head>
	
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


     
		<link rel="stylesheet" type="text/css" href="styles\style.css" >
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
		<a href="regform.php" style="font-size:26px"><input type="button" class="btn" value="Register"></a><br>
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
  


	<form class="signup" method="post" action="pres.php"  enctype="multipart/form-data">
<h3 style="font-family:sans-serif;">

<div class="wrapperf">

	<div class="titlef">
	Upload Prescription
	</div>
	<h4>Fill out this information before you upload the prescription</h4>
	<div class="formf">
		<div class="inputs f">
			<lable>Name of the patient:</lable>
			<input style="font-family:sans-serif; font-size:15px;" type="text" class="inputf" name="fullname" placeholder="Full Name" required>
		</div>
		<div class="inputs f">
			<lable>Age:</lable>
			<input style="font-family:sans-serif; font-size:15px;" type="age" class="inputf" name="age"required><br/>
		</div>
	
		<div class="inputs f">
			<lable>Mobile Number:</lable>
			<input style="font-family:sans-serif; font-size:15px;" type="phone" class="inputf" name="mobile" pattern="[0-9]{10}" placeholder="0123456789" required><br/>
		</div>
		
		<div class="inputs f">
			<lable>Necessary Instructions:</lable><br>
			<textarea  name="instructions" rows="8" cols="50" class="textarea" required></textarea><br/>
		</div>
		
		<div class="inputs">
		<div class="container">
  <div class="card">
    <h3>Upload Files</h3>
    <div class="drop_box">
      <header>
        <h4>Select File here</h4>
      </header>
      <p>Files Supported: PDF, JPG , PNG</p>
      <input type="file" name="files" class="upbtn" id="fileID">
	  
      
    </div>
  </div>
</div>
<br>
	<button type="submit" name="submit" class="btn">Submit and Upload</button>
	</div>
	</div>
</div>

	<center>
	<br>
	<a href=" category.php"><p style="font-family:sans-serif; font-size:15px; text-decoration:none;">Don't have a prescription?</p></a>
	</center>
	</div>
	</div>
	</div>
</div>
</h3>
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