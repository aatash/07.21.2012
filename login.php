<?php
require_once('function.php');
$test = DB::queryFirstRow("SELECT * from users WHERE username = %s", $_POST['username']);
if($test) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['id'] = $test['id'];
	echo "signed in.";
	}
else {
	echo "invalid password.";
	}
	