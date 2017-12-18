<!DOCTYPE html>
<html>
<head>
	<title>Include Web Forms</title>
</head>
<body>

<!-- I will correct any errors in this section as soon as I complete Dicovery Projects for ch.5 -->

	<a href="#AddZodiacFeedback"><h2>Add Zodiac Feedback</h2></a>
	<a href="#ViewZodiacFeedback"><h2>View Zodiac Feedback</h2></a>
	<a href="#AlphabetizeUserInput"><h2>Alphabetize User Input</h2></a>
	<a href="#ImageGallery"><h2>Image Gallery</h2></a>
	
	<a name="AddZodiacFeedback"><h3>Add Zodiac Feedback</h3></a>
	<p>Creating the zodiac feedback form was not too difficult. It is an html form with multiple text inputs, an input tag checkbox,
	and an input tag submit button. The most challenging part with it was making the message input multi-line while maintaining the cursor 
	position in the upper left of the field.</p>
	<a href="../zodiac_feedback.html">[Test the Script]</a>
	<a href="../ShowSourceCode.php?source_file=zodiac_feedback.html">[View the Script]</a>

	<a name="ViewZodiacFeedback"><h3>View Zodiac Feedback</h3></a>
	<p>The biggest hurdle that I had to get over when writing this code was my aversion to copying and pasting code. Once I got past that, 
	things began to move at a more reasonable pace. Initially, my table output was creating an infinite loop. This was corrected when 
	it was discovered that our textbook has an overuse of the '=' sign.</p>
	<a href="../view_zodiac_feedback.php">[Test the Script]</a>
	<a href="../ShowSourceCode.php?source_file=view_zodiac_feedback.php">[View the Script]</a>

	<a name="AlphabetizeUserInput"><h3>Alphabetize User Input</h3></a>
	<p>In the Alphabetize Signs project, I had to accept user input in the form of a comma-seperated list and output this data as an ordered list. I first chose to search the string input for the word 'and' (in case the user typed "item, and item"), then remove it. Secondly, I exploded the string into array elements based on the comma delimiter. Thirdly, I trimmed off any whitespace and sorted the array elements. And lastly, I printed the elements to the page, formatted within an ordered list.</p>
	<a href="../AlphabetizeSigns.php">[Test the Script]</a>
	<a href="../ShowSourceCode.php?source_file=AlphabetizeSigns.php">[View the Script]</a>

	<a name="ImageGallery"><h3>Image Gallery</h3></a>
	<p>In this section, I created an associative array with the image's file name as the key and the name of the animal as the value. Next, I created a variable to hold each element's keys with the array_keys() function. Finally, I concatenated this with anchor and image tags to produce clickable images. The page renders with each image 75px by 75px with a 10px margin. If you click any image, it redirects you to another page showing the image in its full size.</p>
	<a href="../ZodiacGallery.php">[Test the Script]</a>
	<a href="../ShowSourceCode.php?source_file=ZodiacGallery">[View the Script]</a>

</body>
</html>