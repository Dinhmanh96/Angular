<?php
	class Database{

		private $host = "localhost";
		private $db_name = "angular";
		private $username = "root";
		private $password = "manh9896";
		public $conn;


		public function getConnection(){
        $this->conn = null;
        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name) or die ('Loi');
        mysqli_query($this->conn,"SET NAMES 'uft8'");
        return $this->conn;
    	}
	}

	


?>