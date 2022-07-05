
<!DOCTYPE html>
<html>
<body>

 <?php
$host = "localhost";
$username = "root";
$password = '';
$dbname = "product";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, image, qty, price FROM product_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - Image: " . $row["image"]. " " . $row["qty"].$row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 

</body>
</html>