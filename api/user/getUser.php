<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	// include database and object files
	include_once '../config/db_connect.php';
	include_once '../objects/user.php';
	$db = new Database();
	$conn = $db->getConnection();
	$user = new User($conn);
	$query = $user->getUser();

	$num = mysqli_num_rows($query);

	if ($num > 0) {
		$user_arr = array();
		$user_arr['users'] = array();

		while ($rows = mysqli_fetch_array($query)) {
			$user_item = array(
					"id" => $rows['id'],
					"name" => $rows['name'],
					"age" => $rows['age'],
					"email" => $rows['email']
				);
			array_push($user_arr["users"], $user_item);
		}
	}
	echo json_encode($user_arr);
?>