<?php

	include_once "./classes/Country.php";

	$c = new Country();

	$resObj = array();

	$method = $_SERVER['REQUEST_METHOD'];

	if ($method == "GET") {
		
		if (isset($_GET['id'])) {
			$resObj = $c->getCountryById($_GET['id']);
		}
		else{
			$resObj = $c->getAllCountries();
		}
	}
	else{
		$resObj['status_code'] = 405;
		$resObj['message'] = "Invalid Method";
	}

	echo(json_encode($resObj));
?>