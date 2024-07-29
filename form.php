<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdatabase";
$Nn=$_POST["Names"];
$F=$_POST["Father"];
$M=$_POST["Mother"];
$D=$_POST["DOB"];
$E=$_POST["Mail"];
$C=$_POST["Course"];
$A=$_POST["Address"];
// Create connection
$N=$Nn.substr(str_shuffle("0123456789"), 0, 4);
$P=substr(str_shuffle("0123456789"), 0, 4);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
           $insert = $conn->query("INSERT INTO silverline(Names,Password,Father_Name,Mother_Name,DOB,Mail,Course,Address,Photo)VALUES ('$N','$P','$F','$M','$D','$E','$C','$A','$imgContent')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg;
?>

    
	