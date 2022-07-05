
	
	
	
	<?php 
	
	require "config.php";

	session_start(); 

	if (isset($_POST['username']) && isset($_POST['password'])) {

		
		
		$username = $_POST["username"];

		$password = $_POST["password"];
		
		

		if (empty($username)) {

			header("Location: loginmain.php?error=User Name is required");
			//echo "User Name is required";

			exit();

		}else if(empty($password)){

			header("Location: loginmain.php?error=Password is required");
			//echo "Password is required";
			exit();

		}else{

			$sql = "SELECT * FROM users WHERE fname='$username' AND password='$password'";

			$result = mysqli_query($con, $sql);
			

			if (mysqli_num_rows($result) === 1) {

				$row = mysqli_fetch_assoc($result);
				
				echo $username;
				echo $password;
				echo $row['fname'];
				echo $row['password'];
				
				if ($row['fname'] === $username && $row['password'] === $password) {

					echo '<script>alert("Logged in!")</script>';
					

					$_SESSION['fname'] = $row['fname'];
					
					$_SESSION['password'] = $row['password'];

					$_SESSION['lname'] = $row['lname'];

					$_SESSION['number'] = $row['number'];
					
					$_SESSION['mail'] = $row['mail'];
					
					$_SESSION['address'] = $row['address'];

					header("Location: profile.php");
					//echo "<a href='profile.php'>Click here to view profile</a>";
					exit();

				}else{

					header("Location: loginmain.php?error=Incorect User name or password");
					echo '<script>alert("Incorect User name or password 1")</script>';
					exit();

				}

			}else{

				header("Location: loginmain.php?error=Incorect User name or password");
				echo '<script>alert("Incorect User name or password 2")</script>';
				exit();

			}

		}

	}else{

		header("Location: loginmain.php");
		
		exit();

	}
		
	
?>