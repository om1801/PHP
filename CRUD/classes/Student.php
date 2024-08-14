<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class Student extends DbConfig
	{
		
		function getAllStudents(){
			$sql = "SELECT * FROM students;";

			$res = mysqli_query($this->con, $sql);

			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}

			return $resArray;
		}

		function insertStudent($input){
			extract($input);
			$sql = "INSERT INTO students(id, name, enrollment, password, branch, sem) VALUES (NULL,'$name', '$enrollment', '$password', '$branch', $sem);";

			$res = mysqli_query($this->con, $sql);

			$resMessage = "Insert Successfull";

			return $resMessage;
		}

		function getStudentById($id){
			$sql = "SELECT * FROM students WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resRow = mysqli_fetch_assoc($res);

			return $resRow;
		}

		function deleteStudentById($id){
			$sql = "DELETE FROM students WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resMsg = "Delete Successfull";

			return $resMsg;
		}

		function updateStudent($input){
			extract($input);
			$sql = "UPDATE students SET name='$name',enrollment='$enrollment',branch='$branch',sem=$sem WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resMessage = "Update Successfull";

			return $resMessage;
		}
	}

?>