<!DOCTYPE html>
<html>
<head>
	<title>Chinese Zodiac For Loop</title>
	<style>
		td {
			border: 1px dotted #87290a;
			width: 85px;
			height: 15px;
			text-align: center;
		}
		img {
			width: 75px;
			padding-top: 5px;
		}
	</style>
</head>
<body>
	
	<?php

		$Signs = array(
			"Rat",
			"Ox",
			"Tiger",
			"Rabbit",
			"Dragon",
			"Snake",
			"Horse",
			"Goat",
			"Monkey",
			"Rooster",
			"Dog",
			"Pig"
			);
		$Columns = 1;
		echo "<table>"; // start the table
		echo "<tr>"; // start a row
		//print each image for corresponding index in table headers
		$Sign = 0;
		while ($Sign < count($Signs)) {
			echo '<td><img src="images/' . $Signs[$Sign] . '.png"></td>';
			$Sign++;
		}
		echo "</tr>";
		echo "<tr>";
		// while loop to print year and table cells
		$Year = 1912; 
		while ($Year < 2018) {
			echo "<td>" . $Year . "</td>";
			if ($Columns % 12 == 0) {
				echo "</tr>";
				echo "<tr>";
			}
			$Year++;
			$Columns++;
		}

		echo "</tr>";
		echo "</table";

	?>

</body>
</html>