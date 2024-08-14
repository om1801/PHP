<?php
	include_once "./classes/Student.php";

	$s = new Student();

	$updateMsg = $s->updateStudent($_POST);

	header("Location: listStudents.php");
	die();
?>