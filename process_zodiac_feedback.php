<?php
	include 'Includes/inc_connect.php';
	$db_table = "zodiacfeedback";
	$MessageDate = date("Y-m-d");
	$MessageTime = time();
	$Sender = $_POST['first_name'] . " " . $_POST['last_name'];
	$Message = $_POST['message'];
	$PublicMessage = "N";
	if (isset($_POST['public_message'])) {
		$PublicMessage = "Y";
	}
	$SQLString = "INSERT INTO $db_table " . 
	"(message_date, message_time, sender, message, public_message) VALUES " .
	"('$MessageDate', '$MessageTime', '$Sender', '$Message', '$PublicMessage')";
	$QueryResult = @mysqli_query($DBConnect, $SQLString);
	if ($QueryResult == FALSE)
		echo "<p>Unable to execute the query.</p>"
		. "<p>Error code " . mysqli_errno($DBConnect)
		. ": " . mysqli_connect_error($DBConnect) . "</p>";
	else {
		echo "<p>Thank you for entering a comment.</p>"; // switch these two
		echo "<p>Successfully added the comment.</p>";
		echo "<p>" . mysqli_info($DBConnect) . "</p>";
	}
?>