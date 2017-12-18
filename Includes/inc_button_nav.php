<!-- <!DOCTYPE html>
<html>
<head>
	<title>Include Button Navigation</title>
</head>
<body> -->

	<?php
		include 'Includes/inc_banner_display.php';
		// statement to determine which banner image to display
		$image = $banner_array[$banner_index];
	?>
	<div>
		<img class="btn" src="<?php echo $image; ?>" alt="[Banner Ad]" title="Banner Ad" style="border:0" />
	</div>

	<a href="my_chinese_zodiac.php?page=home_page">
	<img src="images/button_home-page.png"
	alt="[Home Page]" title="Home Page" style="border:0" /></a><br />

	<a href="my_chinese_zodiac.php?page=site_layout">
	<img src="images/button_site-layout.png"
	alt="[Site Layout]" title="Site Layout" style="border:0" /></a><br />
	
	<a href="my_chinese_zodiac.php?page=control_structures">
	<img src="images/button_control-structures.png"
	alt="[Control Structures]" title="Control Structures" style="border:0" /></a><br />

	<a href="my_chinese_zodiac.php?page=string_functions">
	<img src="images/button_string-functions.png"
	alt="[String Functions]" title="String Functions" style="border:0" /></a><br />

	<a href="my_chinese_zodiac.php?page=web_forms">
	<img src="images/button_web-forms.png"
	alt="[Web Forms]" title="Web Forms" style="border:0" /></a><br />

	<a href="my_chinese_zodiac.php?page=midterm_assessment">
	<img src="images/button_midterm-assessment.png"
	alt="[Midterm Assessment]" title="Midterm Assessment" style="border:0" /></a><br />

	<a href="my_chinese_zodiac.php?page=state_information">
	<img src="images/button_state-information.png"
	alt="[State Information]" title="State Information" style="border:0" /></a><br />

	<a href="my_chinese_zodiac.php?page=user-templates">
	<img src="images/button_user-templates.png"
	alt="[User Templates]" title="User templates" style="border:0" /></a><br />

	<a href="my_chinese_zodiac.php?page=final_project">
	<img src="images/button_final-project.png"
	alt="[Final Project]" title="FInal Project" style="border:0" /></a><br />

<!-- </body>
</html> -->