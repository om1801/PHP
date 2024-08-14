<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class Student extends DbConfig
	{
		
		function getAllStudents(){
			//creating sql prepare statement
			$sql = "SELECT * FROM students;";
			$stGetAllStu = mysqli_prepare($this->con, $sql);

			//executing sql prepare statement
			mysqli_stmt_execute($stGetAllStu);

			$res = mysqli_stmt_get_result($stGetAllStu);
			
			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}

			return $resArray;
		}

		function insertStudent($input){
			extract($input);
			
			//creating sql prepare statement
			$sql = "INSERT INTO students(id, name, enrollment, password, branch, sem) VALUES (NULL,?,?,?,?,?);";
			$stInsStu = mysqli_prepare($this->con, $sql);

			//binding parameters to sql prepare statement
			mysqli_stmt_bind_param($stInsStu,'ssssi',$name, $enrollment, $password, $branch, $sem);

			//executing sql prepare statement
			mysqli_stmt_execute($stInsStu);

			$resMessage = "Insert Successfull";

			return $resMessage;
		}

		function getStudentById($id){
			//creating sql prepare statement
			$sql = "SELECT * FROM students WHERE id=?;";
			$stGetByIdStu = mysqli_prepare($this->con, $sql);

			//binding parameters to sql prepare statement
			mysqli_stmt_bind_param($stGetByIdStu,'i',$id);

			//executing sql prepare statement
			mysqli_stmt_execute($stGetByIdStu);

			$res = mysqli_stmt_get_result($stGetByIdStu);

			$resRow = mysqli_fetch_assoc($res);

			return $resRow;
		}

		function deleteStudentById($id){
			//creating sql prepare statement
			$sql = "DELETE FROM students WHERE id=?;";
			$stDelStu = mysqli_prepare($this->con, $sql);

			//binding parameters to sql prepare statement
			mysqli_stmt_bind_param($stDelStu,'i',$id);

			//executing sql prepare statement
			mysqli_stmt_execute($stDelStu);

			$resMsg = "Delete Successfull";

			return $resMsg;
		}

		function updateStudent($input){
			extract($input);
			//creating sql prepare statement
			$sql = "UPDATE students SET name=?,enrollment=?,branch=?,sem=? WHERE id=?;";
			$stUpStu = mysqli_prepare($this->con, $sql);

			//binding parameters to sql prepare statement
			mysqli_stmt_bind_param($stUpStu,'sssii',$name, $enrollment, $branch, $sem, $id);

			//executing sql prepare statement
			mysqli_stmt_execute($stUpStu);

			$resMessage = "Update Successfull";

			return $resMessage;
		}
	}

?>