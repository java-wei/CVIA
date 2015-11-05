<?php
require_once('pdfExtractor.php'); 
require_once('includes/config.php'); 

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
	$cv_description = extractPDF(dirname(__FILE__)."/CVs/".$file);
	// var_dump($cv_description);
    $sql = "INSERT INTO ".CV_TABLE." (cv_description, cv_keyword)
                VALUES ('$cv_description', NULL);";
    $result = mysql_query($sql);
    // var_dump($result);
    // exit(0);
    $query = mysql_query("SELECT @@IDENTITY AS 'Identity';");
    $row = mysql_fetch_assoc($query);
    $CV_id = $row['Identity'];
    $_SESSION['cv_description'][$CV_id] = $cv_description;

  
  	unlink($folder.$file);
  	// header('Location: CVParser.php?job='.$_GET['jobID'].'&cv='.$CV_id);
	header('Location: jobPage.php?job='.$_GET['jobID'].'&cv='.$CV_id.'&status=success');
}
else {
	header('Location: jobPage.php?job='.$_GET['jobID'].'&status=fail');
}

?>

