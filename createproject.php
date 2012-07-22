<?php
require_once('function.php');
$now = time();
DB::insert('projects', array(
	'projectname' => $_POST['projecttitle'],
	'userid' => $_SESSION['id'],
	'private' => '0',
	'skills' => $_POST['skills'],
	'projecttype' => $_POST['type'],
	'projectdesc' => $_POST['description'],
	'datecreated' => $now
	));
	echo "inserted";
	header("Location: http://www.studyfeed.com/projectwing/listings.php"); 
	
/*

Array
(
    [projecttitle] => test
    [type] => nonprofit,soemthing
    [skills] => Ruby on Rails,Javascript
    [private] => private
    [description] => tetest
)
*/