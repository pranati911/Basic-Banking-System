<?php

	$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','pranati','12345678@','pandey-313537e38d');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>