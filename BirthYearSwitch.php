<?php
	date_default_timezone_set('America/New_York');
	$CurrentYear = date('Y');

	$AnimalSigns = array(
		"Rat" => array("Start Date" => 1900, "End Date" => 2020, "President" => "George Washington"),
		"Ox" => array("Start Date" => 1901, "End Date" => 2021, "President" => "Barack Obama"),
		"Tiger" => array("Start Date" => 1902, "End Date" => 2022, "President" => "Dwight Eisenhower"),
		"Rabbit" => array("Start Date" => 1903, "End Date" => 2023, "President" => "John Adams"),
		"Dragon" => array("Start Date" => 1904, "End Date" => 2024, "President" => "Abraham Lincoln"),
		"Snake" => array("Start Date" => 1905, "End Date" => 2025, "President" => "John Kennedy"),
		"Horse" => array("Start Date" => 1906, "End Date" => 2026, "President" => "Theodore Roosevelt"),
		"Goat" => array("Start Date" => 1907, "End Date" => 2027, "President" => "James Madison"),
		"Monkey" => array("Start Date" => 1908, "End Date" => 2028, "President" => "Harry Truman"),
		"Rooster" => array("Start Date" => 1909, "End Date" => 2029, "President" => "Grover Cleveland"),
		"Dog" => array("Start Date" => 1910, "End Date" => 2030, "President" => "George Walker Bush"),
		"Pig" => array("Start Date" => 1911, "End Date" => 2031, "President" => "Ronald Reagan")
	);

	if (isset($_POST['birthifelse'])) {
		$Year = $_POST['birthifelse'];
		$ChosenSign = findSign($Year);
		$Count = getStats($Year);
		$SignMessage = "If your Chinese zodiac sign is the $ChosenSign, you share a zodiac sign with President " .
		$AnimalSigns[$ChosenSign]["President"] . ". ";
		$SignMessage .= "Years of the $ChosenSign include ";
		for ($i = $AnimalSigns[$ChosenSign]["Start Date"];
			$i < $AnimalSigns[$ChosenSign]["End Date"];
			$i += 12)
			$SignMessage .= $i . ", ";
		$SignMessage .= "and " . $AnimalSigns[$ChosenSign]["End Date"] . ".";
		echo "You were born under the sign of the " . $ChosenSign;
		echo "<br/ >";
		echo "<img src='images/" . $ChosenSign . ".png'>";
		echo "<br/ >";
		echo "You are visitor " . $Count . " to enter " . $Year;
	} else {
	?>
		<form method="POST" >
			<p>What year were you born? <input type="number" name="birthifelse" min="<?php echo $CurrentYear-100 ?>" max="<?php echo $CurrentYear ?>" required autofocus></p>
			<input type="submit" name="submit">
		</form>
	<?php } ?>

	<?php
	function findSign($Year) {
		// create zodiac signs array
		$Signs = array( "Monkey", "Rooster", "Dog", "Pig", "Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat");
		switch ($Year%12) {
			case 0:
				$Sign = $Signs[0];
				break;
			case 1:
				$Sign = $Signs[1];
				break;
			case 2:
				$Sign = $Signs[2];
				break;
			case 3:
				$Sign = $Signs[3];
				break;
			case 4:
				$Sign = $Signs[4];
				break;
			case 5:
				$Sign = $Signs[5];
				break;
			case 6:
				$Sign = $Signs[6];
				break;
			case 7:
				$Sign = $Signs[7];
				break;
			case 8:
				$Sign = $Signs[8];
				break;
			case 9:
				$Sign = $Signs[9];
				break;
			case 10:
				$Sign = $Signs[10];
				break;
			case 11:
				$Sign = $Signs[11];
				break;
		}
		return $Sign;
	}
	function getStats($Year) {
		$Name = "statistics/$Year.txt";
		if (file_exists($Name)) {
			$File = fopen($Name, "r");
			$Counter = fgets($File);
			fclose($File);
		} else {
			$File = fopen($Name, "w");
			$Counter = 0;
			fclose($File);
		}
		// add 1 to counter
		$Counter++;
		file_put_contents($Name, $Counter);
		return $Counter;
	}
?>