<?php

$ZodiacYears = fopen("spazoid.txt", "a+t");
for ($year = 1912; $year < 2018; $year++) {
	switch ($year % 12) {
		case 4:
			fwrite($ZodiacYears, $year . " Rat\n");
			break;
		case 5:
			fwrite($ZodiacYears, $year . " Ox\n");
			break;
		case 6:
			fwrite($ZodiacYears, $year . " Tiger\n");
			break;
		case 7:
			fwrite($ZodiacYears, $year . " Rabbit\n");
			break;
		case 8:
			fwrite($ZodiacYears, $year . " Dragon\n");
			break;
		case 9:
			fwrite($ZodiacYears, $year . " Snake\n");
			break;
		case 10:
			fwrite($ZodiacYears, $year . " Horse\n");
			break;
		case 11:
			fwrite($ZodiacYears, $year . " Goat\n");
			break;
		case 0:
			fwrite($ZodiacYears, $year . " Monkey\n");
			break;
		case 1:
			fwrite($ZodiacYears, $year . " Rooster\n");
			break;
		case 2:
			fwrite($ZodiacYears, $year . " Dog\n");
			break;
		case 3:
			fwrite($ZodiacYears, $year . " Pig\n");
			break;
		// default:
		// 	fwrite($ZodiacYears, $year . "Titty Booger\n");
	}
}
fclose($ZodiacYears);

?>