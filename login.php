<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
// if( $user->is_logged_in() ){ header('Location: index.php'); } 

// print_r($_SERVER);

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: index.php');
		exit;
	
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}

}//end if submit

//redirect to login page
header('Location: index.php');
exit;

//include header template
require('layout/header.php'); 
?>

