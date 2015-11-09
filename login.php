<?php
require_once('includes/config.php');

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$location = $_SESSION['location'];
	if(strrpos($location, "?")) {
		$connector = "&";
	} else {
		$connector = "?";
	}

	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: '.$location.$connector.'action=loginSuccess');	
	} else {
		header('Location: '.$location.$connector.'action=loginFail');
	}

}//end if submit

?>

