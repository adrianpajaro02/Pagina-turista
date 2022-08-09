<?php
	$conn=mysqli_connect("localhost", "root", "", "rv_consultores");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>