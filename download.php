<?php  
 
require_once('procedural_db_connection.php');
$sql = "SELECT * FROM registration_details WHERE registration_ID = " . $_GET["registration_id"];
$result = mysqli_query($conn,$sql); 

if(mysqli_num_rows($result) == 0){
	die("File does not exist");
}
$row = mysqli_fetch_assoc($result);
$size = $row["fileSize"];
$type = $row["fileType"];
$name = $row["fileName"];
$file = $row["certificate_of_good_conduct"];
header('HTTP/1.1 200 OK');
header('Pragma: public');
header('Expires: 0');
header('Accept-Ranges: bytes');
//To tell the browser how large the file is
header("Content-length: $size" );
//To tell the browser the type of file being downloaded
header("Content-type: $type" );
//To tell the browser to save the downloaded file under the specified name
header("Content-disposition:attachment;filename = $name" );
ob_clean();
flush();
echo $file;
exit;

?> 