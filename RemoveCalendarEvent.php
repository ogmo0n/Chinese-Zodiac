<?php
	public function removeCalendarEvent($EventID) {
		// use sessions to serialize and unserialize the EventCalendar object
		// modify getMonthlyCalendar() to add a link after each event's title that calls this function
		/* <a href="RemoveCalendarEvent.php?PHPSESSID=<?php echo session_id(); ?>">Remove event to the calendar</a> */
		if (empty($Year)) {
			$Year = date('Y'); // four digit year
		}
		if (empty($Month)) {
			$Month = date('n'); // month number, no leading zero
		}
		$FirstDay = mktime(0,0,0,$Month,1,$Year);
		$FirstDOW = date('w', $FirstDay); // day of the week
		$LeapYearFlag = date('L', $FirstDay); // month name
		if ($Month == 2) {
			$LastDay = 28 + $LeapYearFlag;
		} else if (($Month == 4) || ($Month == 6) || 
				($Month == 9) || ($Month == 11)) {
			$LastDay = 30;
		} else {
			$LastDay = 31;
		}
		echo "<table>\n"; 
		// create calendar heading
		echo "<tr><td><a href='" . $_SERVER['SCRIPT_NAME'] . 
			"?PHPSESSID=" . session_id() . "&Year=" . ($Year - 1) . 
			"&Month=$Month'>Previous Year</a></td>\n";
		if ($Month == 1) {
			echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . 
			"?PHPSESSID=" . session_id() . "&Year=" . ($Year - 1) . 
			"&Month=12'>Previous Month</a></td>\n";
		} else {
			echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . 
			"?PHPSESSID=" . session_id() . "&Year=$Year" . 
			"&Month=" . ($Month - 1) . "'>Previous Month</a></td>\n";
		}
		echo "<td colspan='3'>$MonthName $Year</td>\n";
		if ($Month == 12) {
			echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . 
			"?PHPSESSID=" . session_id() . "&Year=" . ($Year + 1) . 
			"&Month=1'>Next Month</a></td>\n"; 
		} else {
			echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . 
			"?PHPSESSID=" . session_id() . "&Year=$Year" . 
			"&Month=" . ($Month + 1) . "'>Next Month</a></td>\n"; 
		}
		echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . 
			"?PHPSESSID=" . session_id() . "&Year=" . ($Year + 1) . 
			"&Month=$Month'>Next Year</a></td></tr>\n"; 
		echo "<tr>";
		// insert empty cells for days from Sunday to the first day
		for ($i = 0; $i < $FirstDOW; $i++) {
			echo "<td>&nbsp;</td>";
		}
		for ($i = 1; $i <= $LastDay; $i++) {
			if ((($FirstDOW + $i) % 7) == 1) {
				echo "<tr>";
			}
			echo "<td valign='top'>$i";
			$SQLString = "SELECT EventID, Title FROM event_calendar " . 
				"WHERE EventDate='Year-$Month-$i'";
			$QueryResult = @$this->DBConnect->query($SQLString);
			if ($QueryResult->num_rows > 0) {
				while (($Row = $QueryResult-> fetch_assoc()) != NULL) {
					echo "<br /><a href='EventDetails.php?PHPSESSID=" . 
						session_id() . "&EventID=" . $Row['EventID'] . 
						"'>" . htmlentities($Row['Title']) . "</a>"; 
					echo '<a href="RemoveCalendarEvent.php?PHPSESSID=<?php echo session_id(); ?>">Remove event to the calendar</a>';
				}
			}
			echo "</td>";
			if ((($FirstDOW + $i) % 7) == 0) {
				echo "</tr>";
			}
		}
		// insert empty cells for days after the last day
		if ((($i + $j + $FirstDOW) % 7) != 0) {
			for ($j = 0; (($i + $j + $FirstDOW) % 7) != 0; $j++) {
				echo "<td>&nbsp;</td>";
			}
			echo "</tr>";
		} 
	}
?>