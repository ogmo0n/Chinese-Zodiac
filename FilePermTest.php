<?php
	$perms = fileperms("alphabetizesigns.php");
	$perms = decoct($perms%01000);
	$germs = getcwd();
	echo "file permissions for AlphabetizeSigns: 0" . $perms . "<br>\n" . 
			"and the current working directory is: " . $germs . "<br>\n";
?>