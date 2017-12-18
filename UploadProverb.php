<!DOCTYPE html>
<html>
<head>
	<title>Upload Proverb</title>
</head>
<body>
<?php
	if (!$_POST) {
	echo '<h2>Upload A Proverb</h2><hr/>
	<form name="upload" method="post"> 
		<p>Enter a Chinese proverb: <input type="text" name="proverb" style="width:200px; padding: 0 0 75px 0;"></p>
		<input type="submit" name="submit" value="Submit">
	</form>';
	} else {
		$Proverbs = $_POST['proverb'];
		if (isset($Proverbs)) {
			$TxtFile = fopen("proverbs.txt", "a");
			fwrite($TxtFile, $Proverbs . "\n");
		}
	}
?>
</body>
</html>