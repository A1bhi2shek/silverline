<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$A=$_POST["selectedcourse"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM course WHERE course='$A'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
   
?>

    
	