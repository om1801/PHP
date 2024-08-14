<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class Student extends DbConfig
	{
		
		function getAllStudents(){
			$res = mysqli_query($this->con, "call SP_GetAllStudent()");


			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}

			return $resArray;
		}

		function insertStudent($input){
			extract($input);

			//sql stored procedure call
			$res = mysqli_query($this->con, "call SP_InsertStudent('$name', '$enrollment', '$password', '$branch', $sem)");

			$resMessage = "Insert Successfull";

			return $resMessage;
		}

		function getStudentById($id){
			$res = mysqli_query($this->con, "call SP_GetStudentById($id)");

			$resRow = mysqli_fetch_assoc($res);

			return $resRow;
		}

		function deleteStudentById($id){
			
			$res = mysqli_query($this->con, "call SP_DeleteStudent($id)");

			$resMsg = "Delete Successfull";

			return $resMsg;
		}

		function updateStudent($input){
			extract($input);

			//sql stored procedure call
			$res = mysqli_query($this->con, "call SP_UpdateStudent('$name', '$enrollment', '$branch', $sem, $id)");

			$resMessage = "Update Successfull";

			return $resMessage;
		}
	}

?>