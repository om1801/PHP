<?php

	include_once "./classes/City.php";

	$c = new City();

	$resObj = array();

	$method = $_SERVER['REQUEST_METHOD'];

	if ($method == "GET") {
		
		if (isset($_GET['id'])) {
			$resObj = $c->getCityById($_GET['id']);
		}
		elseif (isset($_GET['state_id'])) {
			$resObj = $c->getAllCitiesByStateId($_GET['state_id']);
		}
		else{
			$resObj = $c->getAllCities();
		}
	}
	else{
		$resObj['status_code'] = 405;
		$resObj['message'] = "Invalid Method";
	}

	echo(json_encode($resObj));
?>