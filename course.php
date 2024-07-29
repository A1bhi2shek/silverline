<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
    // Retrieve the uploaded image from the database
  

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
	$c= $conn->query("SELECT course FROM course");
$rows = mysqli_fetch_all($c);
   
      
echo "
<html>
<head>
</head>
<body bgcolor='sky blue'>
<p align='Center'>
<table width=90% height= 90% border=2>
<tr height= 20%>
<td align='Center' colspan=7>
<img src='SCI.png' height=20% width=100%>
</td>
</tr>
<tr align='Center' height= 5%>
<td><a href='table.html'>HOME</td>
<td><a href='login.html'>LOGIN</td>
<td><a href='form.html'>REGISTER</a></td>
<td>COURSE</td>
<td><a href='facilities.html'>FACILITIES</a></td>
<td>ABOUT</td>
</tr>
<tr>
<td colspan=2 valign='top'><img src='5.jpg' width='100%' height='100%'></td>
<td colspan=4 width=70%>";

$sz=sizeof($rows);
echo "<ol>";
for($i=0;$i<$sz;$i++)
{
	echo "<li>";
echo $rows[$i][0];
echo "<br>";
echo"</li>";
}
echo "</ol>";
echo "</td>
</tr>";
echo"
<tr height= 2%>
<td align='right' colspan=7>&copy all rights reserved</td>
</tr>
</table>
</p>
</body>
</html";
?>