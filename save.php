<?php
	//session_start();
	require_once('database.php');
	require_once 'user-db.php';
	$r = $_GET['id'];
	$user = $_POST['user'];
	$email = $_POST['email'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$birthday = $_POST['birthday'];;
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	update($user, $email,$r);
	update2($lname, $fname, $birthday, $gender,$age,$r);
	//sign_up('cabradilla','1234','cabradill@gmail.com');
	//sign_up2('Cabradilla','Kyle','1997-09-04','Male','cabradilla');
	header('location: profile.php');
?>