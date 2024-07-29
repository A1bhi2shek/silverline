<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$Nn=$_POST["Names"];
$P=$_POST["Password"];
$NP=$_POST["NPassword"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE silverline set Password='$NP' where Names='$Nn'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>