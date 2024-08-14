<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class Country extends DbConfig
	{
		
		function getAllCountries(){
			$sql = "SELECT * FROM countries;";

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

		function getCountryById($id){
			$sql = "SELECT * FROM countries WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resRow = mysqli_fetch_assoc($res);

			$resObj['status_code']=200;
			$resObj['message']="Successfull";
			$resObj['data']=$resRow;
			return $resObj;
		}
	}

?>