<?php
require_once('pdfExtractor.php'); 
require_once('../model/db.php'); 

$job_id = $_GET['jobID'];

if(isset($_POST['btn-upload']))
{    
	$file = $_FILES['myFile']['name'];
	$file_loc = $_FILES['myFile']['tmp_name'];
	$file_size = $_FILES['myFile']['size'];
	$folder="CVs/";
 
	if(strrpos($file, ".pdf") === false) {
		echo '<script language="javascript">';
		echo 'alert("Only pdf files are allowed!")';
		echo '</script>';
        $file = '';
        return;
	}

	move_uploaded_file($file_loc,$folder.$file);
	$cv_description = escapeQuote(extractPDF(dirname(__FILE__)."/CVs/".$file));
  dbInsert(CV_TABLE, "(cv_description, cv_job_id)
                VALUES ('$cv_description', '$job_id');");
  $CV_id = getLastQueryID();
  $_SESSION['cv_description'][$CV_id] = $cv_description;

  move_uploaded_file($file_loc,$folder.$file);
  unlink($folder.$file);
  header('Location: CVParser.php?job='.$_GET['jobID'].'&cv='.$CV_id);
}
else {
	header('Location: ../view/jobPage.php?job='.$_GET['jobID'].'&status=fail');
}

function escapeQuote($cv_description) {
	if(strrpos($cv_description, "'")) {
  		$cv_description = str_replace("'","\'", $cv_description);
  	}

	if(strrpos($cv_description, "\"")) {
  		$cv_description = str_replace("\"","\\\"", $cv_description);
  	}  	

  	return $cv_description;
}

?>


