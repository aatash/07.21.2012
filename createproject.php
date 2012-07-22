<?php
require_once('function.php');
$now = time();
$timeframe = $_POST['timeframe-start'];
$timeframe .= " - ";
$timeframe .= $_POST['timeframe-end']; 
DB::insert('projects', array(
	'projectname' => $_POST['projecttitle'],
	'userid' => $_SESSION['id'],
	'private' => '0',
	'skills' => $_POST['skills'],
	'projecttype' => $_POST['type'],
	'projectdesc' => $_POST['description'],
	'collaborators' => $_POST['collaborators'],
	'timeframe' => $timeframe,
	'datecreated' => $now
	));
	header("Location: http://www.studyfeed.com/projectwing/listings.php"); 

	echo "inserted";
	
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