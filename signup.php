<?php
	require_once('database.php');
	require_once 'user-db.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$birthday = $_POST['birthday'];;
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	sign_up($user, $pass, $email);
	sign_up2($lname, $fname, $birthday, $gender,$age);
	//sign_up('cabradilla','1234','cabradill@gmail.com');
	//sign_up2('Cabradilla','Kyle','1997-09-04','Male','cabradilla');
	header('location: login.php');
?>