<?php

$ZodiacYears = fopen("zodiacyears.txt", "a+t");
for ($year = 1912; $year < 2018; $year++) {
	if ($year%12 == 4) fwrite($ZodiacYears, $year . " Rat\n");
	if ($year%12 == 5) fwrite($ZodiacYears, $year . " Ox\n");
	if ($year%12 == 6) fwrite($ZodiacYears, $year . " Tiger\n");
	if ($year%12 == 7) fwrite($ZodiacYears, $year . " Rabbit\n");
	if ($year%12 == 8) fwrite($ZodiacYears, $year . " Dragon\n");
	if ($year%12 == 9) fwrite($ZodiacYears, $year . " Snake\n");
	if ($year%12 == 10) fwrite($ZodiacYears, $year . " Horse\n");
	if ($year%12 == 11) fwrite($ZodiacYears, $year . " Goat\n");
	if ($year%12 == 0) fwrite($ZodiacYears, $year . " Monkey\n");
	if ($year%12 == 1) fwrite($ZodiacYears, $year . " Rooster\n");
	if ($year%12 == 2) fwrite($ZodiacYears, $year . " Dog\n");
	if ($year%12 == 3) fwrite($ZodiacYears, $year . " Pig\n");
}
fclose($ZodiacYears);

?>