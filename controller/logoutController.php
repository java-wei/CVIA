<?php require('../includes/config.php');

//logout
$user->logout(); 

$location = $_SESSION['location'];

//logged in return to index page
header('Location: '.$location);

?>