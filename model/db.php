<?php

include('../includes/config.php');

function dbSelect($dbName, $criteria) {
	$sql = "SELECT * FROM $dbName $criteria";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	return $row;
}

function dbUpdate($dbName, $fields, $criteria) {
	$sql = "UPDATE $dbName SET $fields $criteria";
	$result = mysql_query($sql);
}

function dbInsert($dbName, $fields) {
	$sql = "INSERT INTO $dbName $fields";
	$result = mysql_query($sql);
}

function getLastQueryID() {
	$query = mysql_query("SELECT @@IDENTITY AS 'Identity';");
  	$row = mysql_fetch_assoc($query);
  	return $row['Identity'];
}




?>