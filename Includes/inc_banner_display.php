<?php

	$banner_array = array(
		"images/banner1.jpg",
		"images/banner2.jpg",
		"images/banner3.jpg",
		"images/banner4.jpg",
		"images/banner5.jpg",
		"images/banner6.jpg",
		"images/banner7.gif",
		"images/banner8.png"
		);
	$banner_count = count($banner_array);
	if (empty($_COOKIE["lastbanner"])) {
		// generate a random index greater than or equal
		// to 0, and less than the number of elements in
		// the $banner_array array away today
		$banner_index = rand(0, $banner_count - 1);
	} else {
		// assign the cookie value to $banner_index
		$banner_index = $_COOKIE["lastbanner"];
		// increment the banner index and use the modulus
		// to ensure that the index is greater than or
		// equal to 0 and less than the count in array
		$banner_index = (++$banner_index) % $banner_count;
	}
	// set or update the cookie value
	setcookie("lastbanner", $banner_index, time()+(60*60*24*7));

?>