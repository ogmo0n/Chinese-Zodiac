<?php 
	include 'Includes/inc_site_counter.php'; 
	include 'Includes/inc_banner_display.php';
?>
<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="style.css">
 -->  <title>Chinese Zodiac</title>
	<meta name="Christopher Odden">
	<meta content="PHP/MySQL CIS224 Chinese Zodiac Project">
</head>
	<body>
	<!-- I have not formatted this site yet (centering) -->
	<div class="wrapper">
    <div class="header">
    	<?php include 'Includes/inc_header.php' ?>
    </div>

    <!-- old text links spot -->

    <div class="button-nav">
    <!-- float left -->
    	<p><?php include 'Includes/inc_button_nav.php' ?></p>
    </div>

    <div class="switch"> <!-- section -->
    <!-- float right -->
    	<p><?php
    	// This if statement does not work (from book) 
    	if (isset($_GET['page'])) {
        	switch ($_GET['page']) {
        		case 'site_layout':
            		include 'Includes/inc_site_layout.php';
           			break;
        		case 'control_structures':
            		include 'Includes/inc_control_structures.php';
            		break;
        		case 'string_functions':
            		include 'Includes/inc_string_functions.php';
            		break;
        		case 'web_forms':
            		include 'Includes/inc_web_forms.php';
            		break; 
        		case 'midterm_assignment':
           			include 'Includes/inc_midterm_assignment.php';
            		break;
        		case 'state_information':
            		include 'Includes/inc_state_information.php';
            		break;
		        case 'user_templates':
		            include 'Includes/inc_user_templates.php';
		            break;
		        case 'final_project':
		            include 'Includes/inc_final_project.php';
		            break;
		        case 'home_page': // Display default page, 'home_page'
		        default:
		            include 'Includes/inc_home.php';
		            break;
		    }
	    } else { 
	    	// If no button has been selected, then display the default page
	    	include 'Includes/inc_home.php';
	    }
    	?></p>
    	</div>

	    <div class="text-nav">
	    	<p><?php include 'Includes/inc_text_links.php' ?></p>
	    </div>

	    <div class="footer">
	    <!-- center footer -->
	    	<p><?php include 'Includes/inc_footer.php' ?></p>
	    </div>

	</div> <!-- end wrapper -->

</body>
</html>