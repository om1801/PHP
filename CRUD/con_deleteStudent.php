<?php
	
	include_once "./classes/Student.php";

	$s = new Student();

	$deleteMsg = $s->deleteStudentById($_GET['id']);

	header("Location: listStudents.php");
	die();

?>