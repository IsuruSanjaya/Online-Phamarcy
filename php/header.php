<!DOCTYPE html>
<head>


<style>

.product{
  border: 1px solid #000000fa;
  margin: 2px 2px 8px 2px;
  padding: 20px;
  text-align: center;
  background-color: #ffffff;
}
		
		
	

table,th,tr,td{
  text-align: center;
	border: 1px solid rgb(0, 0, 0);
	border-collapse: collapse;
	padding: 1%;
}
        
.title2{
  text-align: center;
  color: #00ad5c;
  background-color: #efefef;
  padding: 2%;
}
h2{
  text-align: center;
  color: #00ad5c;
  background-color: #efefef;
  padding: 2%;
}
        
table th{
 background-color: #efefef;
}
		
		
	
.btn {
  background-color: #00ad5c;
  border: none;
  color: white;
  padding: 36px 32px;
  text-align: center;
  font-size: 25px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
}
.btn:hover {
	opacity: 1;
	background-color: #ddd;
  
}
	
.processbtn {
  background-color: rgb(60, 255, 0);
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
}
.processbtn:hover {
	opacity: 1;
	background-color: #ddd;
  color: rgb(65, 228, 0);
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  font-size: 22px;


}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


</style>
</head>
		<link rel="stylesheet" type="text/css" href="styles/style.css" >
		
    
		<title>Mediserve</title>
	</head>
	<body>
    <div class="header1">
	<img class="logo" src="images/medilogo.jpg" align= "left">
	
	<a href="profile.html"><img class ="loginpic" src="images/login.jpg"  width="100" height="100" align="right" alt=""></a>
		<center>
		
		
		<h1 class="h1" id="medi" style="font-size:70px" >MEDISERVE</h1>
						
		</center>
		
	<div class="header" >
	    <div class="logos">
        
        </div
        <div class="navbar-up">
        <a href="loginmain.php" style="font-size:26px"><input type="button" class="btn" value="Login" style=""></a><br>
		<a href="regform.php" style="font-size:26px"><input type="button" class="btn" value="Register"></a><br>
        </div>
        
  </div>
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
				
				<div class="topnav">
				 <div class="search-container">
               <form action="">
			   <a href="cate.html">
              <input  type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
			  </a>
             </form>
			 </div>
            </div>
			</ul>
		</div>
		
	<!-- category begin-->
	<div class="category">
		<div class="menu">
			<table class ="mTable" border="1px">
				<tr>
					<td><h2>Category</h2></td>
				</tr>
				<tr>
					<td>
						<a href ="#"><h4>Ayurvedic Care</h4></a>
						<a href ="#"><h4>Baby Care</h4></a>
						<a href ="#"><h4>Diabetics</h4></a>
						<a href ="#"><h4>First Aid</h4></a>
					</td>
				</tr>
        <div class="pagination">

				<tr>
					<td>
						<a href ="#"><h4>Personal Care</h4></a>
						<a href ="#"><h4>Skin and Hair Care</h4></a>
						<a href ="#"><h4>Pain Care</h4></a>
						<a href ="#"><h4>Beauty and Health</h4></a>
					</td>
				</tr>
    <center>
      <div class="pagination" >
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      
      </div>
    </center>
				<tr>
					<td>
						<a href ="#"><h4>Wellness</h4></a>
						<a href ="#"><h4>Vitamin</h4></a>
					</td>
				</tr>
			</table>
		</div>
		
		

			