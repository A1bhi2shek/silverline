<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$N=$_POST["Names"];
$P=$_POST["Password"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from silverline where Names='$N' and Password='$P'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
{
    echo "
	<body bgcolor='sky blue'>
	<p align=Center>
	<table width=90% height= 90% border=2>
	<tr height= 20%>
	<td align=Center colspan=7>
	<img src=SCI.png height=20% width=100%></TD>
	</tr>
	<tr>
	<td>
	<table colspan=2 height=60% width=40% align=center border=2>
	<tr>
	<td align=center colspan=2><h3>Your Detail</h3></td>
	</tr>
	<tr>
	<td>Name</td><td>$row[Names]</td>
	</tr>
	<tr>
	<td>Father's Name</td><td>$row[Father_Name]</td>
	</tr>
	<tr>
	<td>Mother's Name</td><td>$row[Mother_Name]</td>
	</tr>
	<tr>
	<td>DOB</td><td>$row[DOB]</td>
	</tr>
	<tr>
	<td>E-Mail Address</td><td>$row[Mail]</td>
	</tr>
	<tr>
	<td>Course<td>$row[Course]</td>
	</tr>
	<tr>
	<td>Permanent Address</td><td>Address</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</body>";
} 
}
else {
  echo "Kindly enter the correct User Name or Password";
}

	$conn->close();
?>