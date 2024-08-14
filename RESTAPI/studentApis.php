<?php

	include_once "./classes/Student.php";

	$s = new Student();

	$resObj = array();

	$method = $_SERVER['REQUEST_METHOD'];

	if ($method == "GET") {
		
		if (isset($_GET['id'])) {
			$resObj = $s->getStudentById($_GET['id']);
		}
		else{
			$resObj = $s->getAllStudents();
		}
	}
	elseif ($method == "POST") {
		$resObj = $s->insertStudent($_POST);
	}
	elseif ($method == "PUT") {
		parse_str(file_get_contents("php://input"),$_PUT);

		$resObj = $s->updateStudent($_PUT);


	}
	elseif ($method == "DELETE") {
		$resObj = $s->deleteStudentById($_GET['id']);
	}
	else{
		$resObj['status_code'] = 405;
		$resObj['message'] = "Invalid Method";
	}

	echo(json_encode($resObj));
?>