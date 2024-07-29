<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$N=$_POST["admin"];
$P=$_POST["password"];
if ($N=="Abhishek" and $P=="Admin") {
echo "<html>
<table border=2 height=50%, width=100% bgcolor='sky blue'>
<tr align='Center' height= 5%>
<td><b><font color='blue' face='algerian'>Welcome To Admin Panel</font></b></td>
</tr>
<tr height=5%>
<td><a href='homepage_photo.html'><font color='white'>Click Here to Change Photo Of Home Page</font></a></td>
</tr>
<tr height=5%>
<td><a href='homepage_text.html'><font color='white'>Click Here to Change Content Of Home Page</font></a></td>
</tr>
<tr height=5%>
<td><a href='add_remove_course.html'><font color='white'>Click Here to Add or Remove course</font></a></td>
</tr>
</table> 
</body>
</html>
";
}
else{
	echo "Enter the correct Username and Password";
}
?>
