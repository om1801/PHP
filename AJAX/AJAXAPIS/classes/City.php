<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class City extends DbConfig
	{
		
		function getAllCities(){
			$sql = "SELECT * FROM cities;";

			$res = mysqli_query($this->con, $sql);

			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}
			$resObj['status_code']=200;
			$resObj['message']="Successfull";
			$resObj['data']=$resArray;
			return $resObj;
		}

		function getAllCitiesByStateId($id){
			$sql = "SELECT * FROM cities WHERE state_id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}
			$resObj['status_code']=200;
			$resObj['message']="Successfull";
			$resObj['data']=$resArray;
			return $resObj;
		}

		function getCityById($id){
			$sql = "SELECT * FROM cities WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resRow = mysqli_fetch_assoc($res);

			$resObj['status_code']=200;
			$resObj['message']="Successfull";
			$resObj['data']=$resRow;
			return $resObj;
		}
	}

?>