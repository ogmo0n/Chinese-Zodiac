<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	
	<?php 
		include 'Includes/inc_home_links_bar.php';
		if (isset($_GET['section'])) {
			switch ($_GET['section']) {
				case 'zodiac':
					include 'Includes/inc_chinese_zodiac.php';
					break;
				case 'php':
					// a value of 'php' means display default page
				default:
					include 'Includes/inc_php_info.php';
					break;
			}
		} else {
			// if no section has been selected, then display the default page
			include 'Includes/inc_php_info.php';
		}
	?>

</body>
</html>