<?php

	include 'Includes/inc_connect.php';
	
	$SQLString = "SELECT * FROM zodiacfeedback WHERE public_message = 'Y'";
	$QueryResult = @mysqli_query($DBConnect, $SQLString);
	if ($QueryResult == FALSE)
		echo "<p>Unable to execute the query.</p>"
		. "<p>Error code " . mysqli_errno($DBConnect)
		. ": " . mysqli_connect_error($DBConnect) . "</p>";
	else {
		echo "<p>Successfully added the record.</p>";
		echo "<p>" . mysqli_info($DBConnect) . "</p>";
		echo "<table width='100%' border='1'>\n";
		echo "<tr><th>Message Date</th><th>Message Time</th><th>Sender</th>
			<th>Message</th><th>Public Message</th></tr>\n"; // may need to adjust headers since all messages will be public in output
		while (($Row = mysqli_fetch_assoc($QueryResult)) != FALSE) {
			echo "<tr><td>{$Row['message_date']}</td>";
			echo "<td>{$Row['message_time']}</td>";
			echo "<td>{$Row['sender']}</td>";
			echo "<td>{$Row['message']}</td>";
			echo "<td>{$Row['public_message']}</td></tr>\n";
		}
		echo "</table>\n";
	}
	
?>