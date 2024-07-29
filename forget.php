<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$N=$_POST["Names"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from silverline where Names='$N'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
{
    echo "
	Your Password is: ".$row["Password"];
} 
}
else {
  echo "Kindly enter the correct User Name or Password";
}

	$conn->close();
?>