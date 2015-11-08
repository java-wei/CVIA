

<html>
<head>
<title>Download File From MySQL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
	
<?php
require_once('includes/config.php');

$query = "SELECT * FROM upload";

echo $query;

$result = mysql_query($query) or die('Error, query failed');
$num_rows = mysql_num_rows($result);

if($num_rows == 0)
{
	echo "Database is empty <br>";
} 
else
{
	while( $row = mysql_fetch_assoc($result)){
		$filedata=$row['content'];
		$mimetype=$row['type'];
		$filesize=$row['size'];
		$filename=$row['name'];
		$disposition = 'inline';
		header("Content-length: $filesize");
		header("Content-type: $mimetype");
		header("Content-disposition: attachment; filename=$filename");

		echo $filedata;
		//echo "<a style=\"color:red;\" href=\"download.php?id=".$row['id']."\">".$row['name']."</a><br>";
		//echo "<a style=\"color:red;\" href=\"download.php?id=".$row['id'].">".$row['name']."</a><br>"; 
	}
}

?>


</body>
</html>




<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

$id    = $_GET['id'];
$query = "SELECT name, type, size, content " .
         "FROM upload WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) =                                  mysql_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;
 
exit;
}

?>