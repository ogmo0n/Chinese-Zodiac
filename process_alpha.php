<?php
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
?>

