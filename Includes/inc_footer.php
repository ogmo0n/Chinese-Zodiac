<!DOCTYPE html>
<html>
<head>
	<title>Include Footer</title>
</head>
<body>

	<span><a href="http://www.meclabmusic.com">Mec_Lab Development</a> &copy; <?php echo date("Y"); ?></span>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "chinese_zodiac";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$RandomNumber = mt_rand(0, 16);
	$sql = "SELECT proverb, display_count FROM randomproverb WHERE proverb_number = " . $RandomNumber;
	// $sql = "SELECT proverb, display_count FROM randomproverb";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        // echo "<p>" . $row["proverb"] . $row["display_count"] . "</p></br>"; // original instruction
	       	echo "<p>" . $row["proverb"] . "</p></br>";
	        $SQLString = "UPDATE randomproverb SET display_count = " . "$row[display_count] + 1" . " WHERE proverb_number = " . $RandomNumber;
			$QueryResult = @mysqli_query($conn, $SQLString);
			if ($QueryResult == FALSE)
				echo "<p>Unable to execute the query.</p>"
				. "<p>Error code " . mysqli_errno($conn)
				. ": " . mysqli_connect_error($conn) . "</p>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
	echo '<div><img src="images/Dragon' . mt_rand(1, 10) . '.png"></div>'; // removed ../ because it is on home page now
	?>
	<p>Total visitors to this site: <?php echo $visitors; ?></p>
	
</body>
</html>