<?php

	$AssArray = array(
		"rat.png" => "Rat",
		"ox.png" => "Ox",
		"tiger.png" => "Tiger",
		"rabbit.png" => "Rabbit",
		"dragon.png" => "Dragon",
		"snake.png" => "Snake",
		"horse.png" => "Horse",
		"goat.png" => "Goat",
		"monkey.png" => "Monkey",
		"rooster.png" => "Rooster",
		"dog.png" => "Dog",
		"pig.png" => "Pig"
		);

	$src = array_keys($AssArray);

	for ($i = 0; $i < count($src); $i++) {
		echo '<a href="images/' . $src[$i] . '"><img src="images/' . $src[$i] . '" alt="' . $AssArray[$src[$i]] . '" style="width:75px; margin:10px"></a>';
		if ($i == 2 || $i == 5 || $i == 8) {
			echo "<br>";
		}
	}

	// foreach ($AssArray as $src => $alt) {
	// 	echo '<a href="images/' . $src . '"><img src="images/' . $src . '" alt="' . $alt . '" style="width:75px; margin:10px"></a>';
	// }

?>