<?php

function user_db()
{
	$db = new PDO('mysql:/host=localhost;dbname=user;', 'root', '');
	return $db;
}

function sign_up($user, $pass, $em)
{
	$db = user_db();
	$sql = "INSERT INTO useraccnt( username, password, userEmail) VALUES(?,?,?) ";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($user, $pass, $em));
	$db = null;
	
	return true;
}

function search($user){
	$db = user_db();
	$sql = "SELECT * FROM useraccnt WHERE username=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($user));
	$row = $cmd->fetch(PDO::FETCH_ASSOC);
	$db=null;
	return $row;
}

function search3($user){
	$db = user_db();
	$sql = "SELECT userID FROM useraccnt WHERE username=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($user));
	$row = $cmd->fetch(PDO::FETCH_ASSOC);
	$db=null;
	return $row;
}

function search2($id){
	$db = user_db();
	$sql = "SELECT * FROM userprofile WHERE profID=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$row2 = $cmd->fetch(PDO::FETCH_ASSOC);
	$db=null;
	return $row2;
}
//$r = search('admin');
//print_r($r);


function sign_up2($lname, $fname, $birthday, $gender, $age)
{
	$db = user_db();
	$sql = "INSERT INTO userprofile( profLName, profFName, profBirthday, profSex, profAge) VALUES(?,?,?,?,?) ";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($lname, $fname, $birthday, $gender,$age));
	$db = null;
	
	return true;
}

function update($lname, $fname, $birthday, $gender, $age, $id)
{
	$db = user_db();
	$sql = "UPDATE userprofile SET profLName=?, profFName=?, profBirthday=?, profSex=?, profAge=? WHERE profID=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($lname, $fname, $birthday, $gender, $age, $id));
	$db = null;	
	return true;
}
//sign_up2('cabradilla','kyle','1997-09-04','Male','cabradilla');

function update2($user, $em, $id){
	$db = user_db();
	$sql = "UPDATE useraccnt SET username=?,  userEmail=? WHERE userID=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($user, $em, $id));
	$row2 = $cmd->fetch(PDO::FETCH_ASSOC);
	$db=null;
	return $row2;
}
update2('admin','admin2@gmail.com','1');

function user_list()
{
	$db = user_db();
	$sql = "SELECT * FROM useraccnt";
	$cmd = $db->prepare($sql);
	$cmd->execute();
	$rows = $cmd->fetchAll(PDO::FETCH_ASSOC);
	$db = null;
	return $rows;
}
function user_list2()
{
	$db = user_db();
	$sql = "SELECT * FROM userprofile";
	$cmd = $db->prepare($sql);
	$cmd->execute();
	$rows = $cmd->fetchAll(PDO::FETCH_ASSOC);
	$db = null;
	return $rows;
}



