<?php
	
	include_once "DbConfig.php";
	
	class Student extends DbConfig
	{
		
		function getAllStudents(){
			$sql = "SELECT * FROM students;";

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

		function insertStudent($input){
			extract($input);
			$sql = "INSERT INTO students(id, name, enrollment, password, branch, sem) VALUES (NULL,'$name', '$enrollment', '$password', '$branch', $sem);";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Insert Successfull";
			return $resObj;
		}

		function getStudentById($id){
			$sql = "SELECT * FROM students WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resRow = mysqli_fetch_assoc($res);

			$resObj['status_code']=200;
			$resObj['message']="Successfull";
			$resObj['data']=$resRow;
			return $resObj;
		}

		function deleteStudentById($id){
			$sql = "DELETE FROM students WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Delete Successfull";
			return $resObj;
		}

		function updateStudent($input){
			extract($input);
			$sql = "UPDATE students SET name='$name',enrollment='$enrollment',branch='$branch',sem=$sem WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Update Successfull";
			return $resObj;
		}
	}

?>