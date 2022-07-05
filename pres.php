<?php
require 'config.php';



$name=$_POST["fullname"];
$age=$_POST["age"];
$number=$_POST["mobile"];
$info=$_POST["instructions"];

/*$sql="INSERT INTO prescription (name,age,number,info) VALUES ('$name',$age,'$number','$info')";*/

/*$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["files"]["name"]);
if(isset($_FILES["files"])) {
if (move_uploaded_file($_FILES["files"]["tmp_name"],$target_file)){
echo "<br>The file ". basename( $_FILES["files"]["name"]). " is uploaded.";
}
else {
echo "Error while uploading your file.";
}
}else{
echo "File not available";
}*/

$statusMsg = '';

$targetDir = "image/";
$fileName = basename($_FILES["files"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["files"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
             $insert = $con->query("INSERT into prescription (name,age,number,info,file_name, uploaded_on) VALUES ('$name',$age,'$number','$info','".$fileName."', NOW())");
            if($insert){
                $statusMsg = "<h3 style='font-family:sans-serif; font-size:25px; font-weight:700; margin-bottom:25px; color:white; text-transform:uppercase; text-align:center; padding:50px'>The file ".$fileName. " has been uploaded successfully.</h3>";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;



//$sql="INSERT INTO prescription (name,age,number,info) VALUES ('$name',$age,'$number','$info')";


  
/*if($con->query($sql)){
echo "<script>alert('Inserted successfully')</script>";
}
else{
echo "Error:". $con->error;
}*/
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
<a href="prescription.php"><button class="btn">Upload another prescription</button></a>
<a href="homepage.php"><button class="btn">Go back to the homepage</button></a>
</div></center>
</body>
</html>