<?php
require_once('../includes/config.php');

$keyword = $_COOKIE['keyword'];
$importance = $_COOKIE['importance'];
$user_id = $_SESSION['id'];

//process login form if submitted
if(isset($_POST['submit'])){
	$jobName = $_POST['jobname'];
	$jobCompany = $_POST['jobCompany'];
	$jobDescription = $_POST['jobDescription'];
  $jobDueDate = $_POST['jobDueDate'];
  $todayDate = date("Y-m-d"); 

	if(strrpos($jobDescription, "'")) {
  		$jobDescription = str_replace("'","\'", $jobDescription);
  	}
	$sql = "INSERT INTO ".JOB_TABLE." (owner_id, job_title, job_description, job_keyword, keyword_importance, job_company, job_duedate, job_postdate)
                VALUES ('$user_id', '$jobName', '$jobDescription', '$keyword', '$importance', '$jobCompany', '$jobDueDate', '$todayDate');";
  $result = mysql_query($sql);
    // echo mysql_errno($connector) . ": " . mysql_error($connector). "\n";
    // exit(0);
}

$location = $_SESSION['location'];
header('Location: '.$location);

?>
