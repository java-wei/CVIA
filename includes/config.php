<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','127.0.0.1');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','cvia');

//database credentials
define('USER_TABLE','members');
define('JOB_TABLE','job');
define('CV_TABLE','cv');

//application address
define('DIR','http://localhost:8081/CVIA/');

try {

	//create PDO connection 
	$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

$connector = mysql_connect(DBHOST,DBUSER,DBPASS) or die("Unable to connect");
$selected = mysql_select_db(DBNAME, $connector) or die("Unable to connect");

//include the user class, pass in the database connection
include('../model/user.php');
$user = new User($db); 
?>
