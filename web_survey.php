<?php
	session_start();
	$survey_questions = array(
		1 => "Was the navigation straightforward and did all the links work?",
		2 => " Was the selection of background color, font color, and font size appropriate?",
		3 => " Were the images appropriate and did they complement the Web content?",
		4 => " Were the descriptions of the PHP program complete and easy to understand?",
		5 => " Was the PHP code structured properly and well commented?");
	$question_count = count($survey_questions);
	if (isset($_SESSION['CurrentQuestion'])) {
		if (($_SESSION['CurrentQuestion'] > 0) &&
			(isset($_POST['response']))) {
			$_SESSION['Responses'][$_SESSION['CurrentQuestion']]
				= $_POST['response'];
		}
		++$_SESSION['CurrentQuestion'];
	} else {
		$_SESSION['CurrentQuestion'] = 0;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Survey</title>
</head>
<body>
	<h1>Web Survey</h1>
	<?php
	if ($_SESSION['CurrentQuestion'] == 0) {
	?>
	<p>Thank you for reviewing the Chinese Zodiac Web site.<br /> 
	Your candid responses to the following five questions will help<br />
	improve the effectiveness of our PHP demonstration site for future generations.</p>
	<?php
	} else if ($_SESSION['CurrentQuestion'] > $question_count) {
	?>
	<p>Thank you for your honest feedback!</p>
	<p><a href="includes/inc_state_information.php">Back to the Web Survey Page</a></p>
	<?php

		$to = "chrodd9604@students.ecpi.edu";
		$subject = "Survey Questions and Responses";
		$txt = "This is the email body";
		$headers = "From: user@example.com" . "\r\n";
		mail($to, $subject, $txt, $headers);

	} else {
		echo "<p>Question " . $_SESSION['CurrentQuestion'] .
			": " . $survey_questions[$_SESSION['CurrentQuestion']] . "</p>\n";
	}
	if ($_SESSION['CurrentQuestion'] <= $question_count) {
		echo "<form method='post' action='web_survey.php'>\n";
		echo "<input type='hidden' name='PHPSESSID' value=' " . 
			session_id() . "' />\n";
		if ($_SESSION['CurrentQuestion'] > 0) {
			echo "<p><input type='radio' name='response' " . 
				" value='Exceeds Expectations' /> " . 
				" Exceeds Expectations<br />\n";
			echo "<input type='radio' name='response' " . 
				" value='Meets Expectatins'" . 
				" checked='checked' /> " . 
				" Meets Expectations<br />\n";
			echo "<input type='radio' name='response' " . 
				" value='Below Expectations'> " . 
				" Below Expectations</p>\n";
		}
		echo "<input type='submit' name='submit' value='";
		if ($_SESSION['CurrentQuestion'] == 0) {
			echo "Start the survey";
		} else if ($_SESSION['CurrentQuestion'] ==
		$question_count) {
			echo "Finished";
		} else {
			echo "Next Question";
		}
		echo "' />\n";
		echo "</form>\n";
	}
	?>
</body>
</html>