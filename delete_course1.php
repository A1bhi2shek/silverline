<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$c= $conn->query("SELECT course FROM course");
$rows = mysqli_fetch_all($c);

echo"
<html>
<head>
</head>
<body bgcolor='sky blue'>
<form action='delete_course2.php' method='POST'>
<table border=2>
<tr>
<td>Select a course to delete</td>
</tr>
<tr>
<td>";
$sz=sizeof($rows);
echo "<select name='selectedcourse'>";
for($i=0;$i<$sz;$i++)
{
echo "<option>";
echo $rows[$i][0];
echo"</option>";
}
echo "</select>";
echo "</td>
</tr>";
echo"
<tr>
<td>
<input type='submit' name='remove' value='remove'>
</td>
</tr>
</table>
</form>
</body>
</html>";
?>
