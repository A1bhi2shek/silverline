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

    $result = $conn->query("SELECT image FROM images ORDER BY id DESC LIMIT 1");

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $imageData = $row['image'];
      
   

  
echo "<html>
<head>
<link rel='stylesheet' href='styling.css'>
</head>
<body>
<table width=100% height= 100% border=2>
<tr height= 20%>
<td align=Center colspan=8>
<img src=SCI.png height=20% width=100% align=left></td>
</tr>
<tr align=Center height= 5%>
<td>HOME</td>
<td><a href=login.html>LOGIN</td>
<td><a href=form.html>REGISTER</td>
<td><a href=update.html>UPDATE</a></td>
<td><a href=course.php>COURSE</a></td>
<td><a href=facilities.html>FACILITIES</a></td>
<td><a href=about.html>ABOUT</a></td>
</tr>     
<tr >
<td colspan=3 valign=top>";
echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Uploaded Image" style="max-width: 500px;">';
echo "<td colspan=5 width=70% align=center valign=top>";
	}
    $re= $conn->query("SELECT text FROM text");

    if ($re && $re->num_rows > 0) {
      $row = $re->fetch_assoc();
      $image = $row['text'];
      
   
echo "<font color=red>$image</font>";
echo "</td>
</tr>
<tr height= 2%>
<td align=right colspan=7>&copy all rights reserved</td>
</tr>
</table>
</body>
</html>";
	}
  $conn->close();
  ?>