<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$T=$_POST["text"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
$insert = $conn->query("INSERT INTO text(text)VALUES ('$T')"); 

}
if($insert){ 
$status = 'success'; 
$statusMsg = "inserted the text successfully."; }
else
{
	
$statusMsg = "Not inserted the text successfully."; }	
echo $statusMsg;
?>

    
	