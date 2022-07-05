<?php
//Linking the configuration file
require 'config.php';
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$gender = $_POST["gender"];


$number = $_POST["mobile"];
$mail = $_POST["email"];
$address = $_POST["address"];
$day = $_POST["day"];
$password = $_POST["password"];
$sql= "INSERT INTO users(fname,lname,gender,number,mail,address,dob,password)VALUES('$fname','$lname',$gender,'$number','$mail','$address','$day','$password')";
if($con->query($sql)){
echo "<h3 style='font-family:sans-serif; font-size:25px; font-weight:700; margin-bottom:25px; color:white; text-transform:uppercase; text-align:center; padding:50px'>Account Created successfully</h3>";
}
else{
echo "Error:". $con->error;
}
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
<style>

body{
background: rgb(201,107,5);
background: linear-gradient(90deg, rgba(201,107,5,1) 0%, rgba(86,0,168,1) 100%);
}
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


</style>
</head>
<body>
<center>
<div class="">
<a href="loginmain.php"><button class="btn">Login</button></a>

</div></center>
</body>
</html>









