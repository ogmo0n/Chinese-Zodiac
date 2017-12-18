<?php
	session_start();
	require_once("class_EventCalendar.php");
	if (class_exists("EventCalendar")) {
		if (isset($_SESSION['currentCalendar'])) {
			$Calendar = unserialize($_SESSION['currentCalendar']);
		} else {
			$Calendar = new EventCalendar ();
		}
	} else {
		$Calendar = NULL;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Event Calendar</title>
</head>
<body>

	<h1>Event Calendar</h1>

	<?php
		if ($Calendar == NULL) {
			echo "<p>There was an error creating the EventCalendar object.</p>\n";
		} else {
			$Calendar->getMonthlyCalendar($_GET['Year'], $_GET['Month']);
		}
	?>

	<a href="AddCalendarEvent.php?PHPSESSID=<?php echo session_id(); ?>">Add event to the calendar</a>

</body>
</html>