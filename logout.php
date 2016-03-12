<?php
	//the server reserves a space for the user
	session_start();
			
	
	//kill the user session
	session_destroy();
	header('location: login.php');
?>