<?php

	/**
	 * 
	 */
	class DbConfig
	{
		private $host = "localhost";
		private $userName = "root";
		private $password = "";
		private $dbName = "btech-cse";
		public $con = "";
		
		function __construct()
		{
			try {
				$this->con = mysqli_connect($this->host, $this->userName, $this->password, $this->dbName) or die("Some Error Occurs, Message: ". mysqli_connect_error());
			} catch (Exception $e) {

				echo "Exception Occure, Message: ". $e->message;
				
			}
		}
	}
?>