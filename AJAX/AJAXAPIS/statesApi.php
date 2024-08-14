<?php

	include_once "./classes/State.php";

	$s = new State();

	$resObj = array();

	$method = $_SERVER['REQUEST_METHOD'];

	if ($method == "GET") {
		
		if (isset($_GET['id'])) {
			$resObj = $s->getStateById($_GET['id']);
		}
		elseif (isset($_GET['country_id'])) {
			$resObj = $s->getAllStatesByCountryId($_GET['country_id']);
		}
		else{
			$resObj = $s->getAllStates();
		}
	}
	else{
		$resObj['status_code'] = 405;
		$resObj['message'] = "Invalid Method";
	}

	echo(json_encode($resObj));
?>