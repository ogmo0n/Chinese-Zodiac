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
	<title>Event Details</title>
</head>
<body>

	<h1>See Event Details</h1>

	<?php
		if (isset($_POST['EventDate']) &&
				isset($_POST['EventTitle']) && 
				isset($_POST['EventDesc'])) {
			if ($Calendar == NULL) {
				echo "<p>There was an error creating the EventCalendar object.</p>\n";
			} else {
				$Calendar->addEvent(stripslashes($_POST['EventDate']),
					stripslashes($_POST['EventTitle']),
					stripslashes($_POST['EventDesc']));
				$_SESSION['currentCalendar'] = serialize($Calendar); 
			}
		}
	?>

	<form action="EventDetails.php?PHPSESSID=<?php echo session_id(); ?>" method="POST">
		<p>EventID: <input type="text" name="EventID" /> (required)</p> 
		<p><input type="submit" name="submit" value="View Event" /></p>
	</form>

	<?php
	function getEventDetails($EventID) {
		include 'Includes/inc_ChineseZodiacDB.php';
		$this->DBConnect = $DBConnect;
		
		$SQLString = "SELECT Title, Description FROM event_calendar WHERE EventID=" . $EventID;
		$QueryResult = $this->DBConnect->query($SQLString);
		if ($QueryResult == FALSE) {
			echo "<p>Unable to retrieve the event details. " . 
				"Error code " . $this->DBConnect->errno . 
				": " . $this->DBConnect->error . "</p>\n";
		} else {
			echo "<p>Successfully retrieved the event details.</p>";
			echo "<p>" . mysqli_info($DBConnect) . "</p>";
			echo "<table width='100%' border='1'>\n";
			echo "<tr><th>Title</th><th>Description</th></tr>\n"; 
			while (($Row = mysqli_fetch_assoc($QueryResult)) != FALSE) {
				echo "<tr><td>{$Row['Title']}</td>";
				echo "<td>{$Row['Descritpion']}</td></tr>\n";
			}
			echo "</table>\n";
		}
	}
	?>

</body>
</html>

