<?php
require_once('pdfExtractor.php'); 
require_once('includes/config.php'); 
require_once('db/SQLquery.php'); 

if(isset($_POST['btn-upload']))
{    
	$file = $_FILES['myFile']['name'];
	$file_loc = $_FILES['myFile']['tmp_name'];
	$file_size = $_FILES['myFile']['size'];
	$file_type = $_FILES['myFile']['type'];
	$folder="CVs/";
 
	if(strrpos($file, ".pdf") === false) {
		echo '<script language="javascript">';
		echo 'alert("Only pdf files are allowed!")';
		echo '</script>';
        $file = '';
        return;
	}

	move_uploaded_file($file_loc,$folder.$file);
	$cv_description = extractPDF(dirname(__FILE__)."\CVs\\".$file);
	
    $sql = "INSERT INTO cv (cv_description, cv_keyword)
                VALUES ('$cv_description', NULL);";
    $result = mysql_query($sql);
    
    $query = mysql_query("SELECT @@IDENTITY AS 'Identity';");
    $row = mysql_fetch_assoc($query);
    $CV_id = $row['Identity'];
    echo $CV_id;    
  
  	unlink($folder.$file);
	header('Location: jobPage.php?job='.$_GET['jobID'].'&status=success');
}
else {
	header('Location: jobPage.php?job='.$_GET['jobID'].'&status=fail');
}

?>

