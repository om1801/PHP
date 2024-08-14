<?php
	include_once "./classes/Student.php";

	$s = new Student();

	$s->insertStudent($_POST);

	header("Location: listStudents.php");
	die();
?>