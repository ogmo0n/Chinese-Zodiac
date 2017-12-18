<!DOCTYPE html>
<html>
<head>
	<title>Show Source Code</title>
</head>
<body>
<?php
	if (isset($_GET['source_file'])) {
		$SourceFile = file_get_contents(stripslashes($_GET['source_file']));
		highlight_string($SourceFile);
	} else {
		echo "<p>No source file name entered</p>\n";
	}
?>
</body>
</html>