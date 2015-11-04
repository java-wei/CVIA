<?php
require_once('pdfExtractor.php'); 

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
	echo extractPDF(dirname(__FILE__)."\CVs\\".$file);
	unlink($folder.$file);

	$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$file','$file_type','$file_size')";
	// mysql_query($sql); 

	header('Location: jobPage.php?job='.$_GET['jobID'].'&status=success');
}
else {
	header('Location: jobPage.php?job='.$_GET['jobID'].'&status=fail');
}

?>

