

<?php
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$mobile =$_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$date = $_POST['date'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	
	
	$host = "localhost";  
    $username = "root";  
    $password = '';  
   
    $db_name = "registration_form";	
      
    $conn = mysqli_connect($host, $username, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  


$sql="insert into regiform(firstName, lastName, gender,mobile, email,haddress,dob, password,repassword ) values('$firstName', '$lastName', '$gender', '$mobile','$email','$address','$date', '$password',' $repassword')";

//Excuse  the quer

if (mysqli_query($conn, $sql)){
	
	echo"<script>alert(' successfully recorded')</script>";
}
else{
	echo"<script>alert('Error')</script>";
}
//close the connection

mysqli_close($conn);

?>