<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class State extends DbConfig
	{
		
		function getAllStates(){
			$sql = "SELECT * FROM states;";

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

		function getAllStatesByCountryId($id){
			$sql = "SELECT * FROM states WHERE country_id=$id;";

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

		function getStateById($id){
			$sql = "SELECT * FROM states WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resRow = mysqli_fetch_assoc($res);

			$resObj['status_code']=200;
			$resObj['message']="Successfull";
			$resObj['data']=$resRow;
			return $resObj;
		}
	}

?>