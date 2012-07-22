<?php
require_once('function.php');
$test = DB::queryFirstRow("SELECT * from users WHERE username = %s", $_POST['username']);
if($test) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['id'] = $test['id'];
	$_SESSION['realname'] = $test['realname'];
	echo "signed in.";
	header("Location: http://www.studyfeed.com/projectwing/listings.php"); 
	}
else {
	echo "invalid password.";
	}
	