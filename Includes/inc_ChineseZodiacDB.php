<?php

$ErrorMsgs = array();
$DBConnect = @new mysqli("localhost", "root", "", "chinese_zodiac");
if ($DBConnect->connect_error) {
	$ErrorMsgs[] = "The database server is not available." . 
		"Connect Error is " . $mysqli->connect_error . ".";
}

?>