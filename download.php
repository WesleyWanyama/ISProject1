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
//Request has succeeded 
header('HTTP/1.1 200 OK');
//Indicates that the response MAY be cached by any cache
header('Pragma: public');
//cache will always treat this entry as stale/it will need to revalidate it first before returning it to a client
header('Expires: 0');
//To inform the server by the client that which content type is understandable by the client expressed as MIME-types
header('Accept-Ranges: bytes');
//To tell the browser how large the file is
header("Content-length: $size" );
//To tell the browser the type of file being downloaded
header("Content-type: $type" );
//To tell the browser to save the downloaded file under the specified name
header("Content-disposition:attachment;filename = $name" );
//This function deletes all of the contents of the topmost output buffer, preventing them from getting sent to the browser.
ob_clean();
//Flushes the output stream and forces any buffered output bytes to be written out.
flush();
echo $file;
exit;

?> 