<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment=$_POST['comment'];


$host = "localhost";  
    $username = "root";  
    $password = '';  
     
    $db_name = "about";	
      
    $conn = mysqli_connect($host, $username, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	
	$sql="insert into feedback(name, email,comment) values('$name','$email','$comment')";
	
	//Excuse  the quer

if (mysqli_query($conn, $sql)){
	
	echo"<script>alert(' successfully log in')</script>";
}
else{
	echo"<script>alert('Error')</script>";
}
//close the connection

mysqli_close($conn);

?>

