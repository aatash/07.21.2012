<?php
require_once('function.php');
if($_POST['username'] && $_POST['password']) {
}
else { die(); }

$username = $_POST['username'];
$password = $_POST['password'];
$realname = $_POST['realname'];
$about = 	$_POST['about'];

db::insert("users", array(
	'username' => $username,
	'password' => $password,
	'realname' => $realname,
	'about' => $about
	));

		header("Location: http://www.studyfeed.com/projectwing/login.php"); 

	echo "Successfully registered.";

//$test = DB::queryFirstRow("SELECT * from users WHERE 1");
//print_r($test);
?>