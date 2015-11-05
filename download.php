<?php
require_once('includes/config.php'); 

$sql = "SELECT * FROM cv WHERE cv_id = ".$_GET['id'];
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

$bytes = $row['cv_description'];
var_dump($bytes);

header("Pragma: public");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
header("Content-type: application/pdf");
header('Content-disposition: attachment; filename="thing.pdf"');
header("Content-Transfer-Encoding: binary");
print_r(headers_list());
echo $bytes;

?>
