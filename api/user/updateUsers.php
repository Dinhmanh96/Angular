<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	// include database and object files
	include_once '../config/db_connect.php';
	include_once '../objects/user.php';

	$db = new Database();
	$conn = $db->getConnection();
	$user = new User($conn);

	$data = json_decode(file_get_contents("php://input"));

	$user->id = $data->id;
	$user->name = $data->name;
	$user->age = $data->age;
	$user->email = $data->email;

	if ($user->updateUser()) {
		echo json_encode(["Update user success"]);
	}else{
		echo json_encode(["Update user error"]);
	}

?>