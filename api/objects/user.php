<?php
	class User{

		public $conn;
		public $table_name;

		// Property User
		public $id;
		public $name;
		public $age;
		public $email;


		public function __construct($conn){
			$this->conn = $conn;
		}

		public function getUser(){
			$sql = "SELECT * FROM user";
			$query = mysqli_query($this->conn,$sql);
			return $query;
		}

		public function addUser(){
			$sql = "INSERT INTO user VALUES ('$this->id','$this->name',$this->age,'$this->email')";
			$query = mysqli_query($this->conn,$sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function updateUser(){
			$sql = "UPDATE user SET name='$this->name', age='$this->age', email='$this->email' WHERE id='$this->id'";
			$query = mysqli_query($this->conn,$sql);

			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function getRow($id){
			$sql = "SELECT * FROM user WHERE id='$id'";
			$query = mysqli_query($this->conn,$sql);
			return $query;
		}

		public function deleteUser(){
			$sql = "DELETE FROM user WHERE id ='$this->id'";
			$query = mysqli_query($this->conn,$sql);

			if ($query) {
				return true;
			}else{
				return false;
			}
		}
		
	}


?>