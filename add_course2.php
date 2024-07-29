<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$A=$_POST["c"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$status = $statusMsg = ''; 
if(isset($_POST["add"])){ 
$insert = $conn->query("INSERT INTO course(course)VALUES ('$A')"); 
}
if($insert){ 
$status = 'success'; 
$statusMsg = "course insertd successfully."; }
echo $statusMsg;
?>

    
	