<?php

	include 'inc_connect.php';
	// set a cookie if this is the first visit - 
	// the expires argument is 1 day to prevent 
	// visits from infrementing each time the user 
	// returns to the page that contains the site counter
	if (empty($_COOKIE["visits"])) {
		// increment counter in DB
		mysqli_query($DBConnect, "UPDATE visit_counter SET counter = counter + 1 WHERE id = 1");
		// query the visit_counter table and assign the counter value to $visitors
		$queryResult = mysqli_query($DBConnect, "SELECT counter FROM visit_counter WHERE id = 1");
		if(($row = mysqli_fetch_assoc($queryResult)) != FALSE) {
			$visitors = $row['counter'];
		} else {
			$visitors = 1;
		}
		// set cookie value
		setcookie("visits", $visitors, time()+(60*60*24));
	} else {
		// otherwise assign the cookie value to the $visitor
		$visitors = $_COOKIE["visits"];
	}

?>