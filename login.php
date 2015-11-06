<?php
//include config
require_once('includes/config.php');

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: index.php?action=loginSuccess');
		exit;
	
	} else {
		//$error[] = 'Wrong username or password or your account has not been activated.';
		header('Location: index.php?action=loginFail');
		exit;
	}

}//end if submit


//include header template
require('layout/header.php'); 
?>

