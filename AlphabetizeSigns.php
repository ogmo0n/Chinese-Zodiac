<!DOCTYPE html>
<html>
<head>
	<title>Alphabetize Arrays</title>
</head>
<body>

<?php
	if (!$_POST) {
		// I removed the 'action' part and it is working now
	echo '<h2>Alphabetize Signs</h2><hr/>
	<p>Enter all of the Chinese Zodiac Signs, seperated by commas, in a random order. After submitting, the signs shall be alphabetized.</p>
	<form name="alpha" method="post"> 
		<p>Chinese Zodiac Sign: <input type="text" name="signs"></p>
		<input type="submit" name="submit" value="Submit">
	</form>';
	} else {
		$Signs = $_POST['signs'];
		if (preg_match('~\band\b~i', $Signs)) {
			$Signs = preg_replace('~\band\b~', '', $Signs);
			// $Signs = preg_replace('~[^a-zA-Z0-9]+(\band\b)~', '', $Signs);
		}
		// not sure how to remove all extra chars then put in array
		$SignsArray = explode(',', $Signs);
		$SignsArray = array_map('trim', $SignsArray);
		sort($SignsArray);
		echo "Alphabetized: <ol>";
		foreach ($SignsArray as $Sign) {
			echo "<li>" . $Sign . "</li>";
		}
		unset($Sign);
		echo "</ol>";
	}
	// This, with the research, took me 3hrs including walking the dog and 
	// talking to my neighbor about trees (about 2/2.5hrs)
	// This is important work, but with a job, house, and dog, it is nearly
	// impossible to do all the work and the reading.
	// The reading has taken a back seat, unfortunately.
	// I am concerned about taking Midterms with you. 
	// The C++ practical looks easy, but PHP w/ regex is a lot.
?>

</body>
</html>