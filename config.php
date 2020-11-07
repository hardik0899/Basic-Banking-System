<?php

	$conn = mysqli_connect('sql104.epizy.com','epiz_27134120','UVo9DPCLnT','epiz_27134120_bank_db');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>