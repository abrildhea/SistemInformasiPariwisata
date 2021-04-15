<?php

	require_once '../connection/conn.php';

	class usr{}

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	if ( (empty($email)) || (empty($password)) ) {
		$response = new usr();
		$response -> success = 2;
		$response -> message = "Tidak Boleh Kosong!";
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	$sql = $conn->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
	$sql -> bindParam(':email', $email);
	$sql -> bindParam(':password', $password);
	
	if ($sql -> execute() ) {
		$count = $sql->fetchAll(PDO::FETCH_ASSOC);
		if (!empty($count)) {
			$response = new usr();
			$response -> success = 1;
			$response -> message = "Selamat Datang!";
			header('Content-Type: application/json');
			echo json_encode($response);
		}
	} else {
			$response = new usr();
			$response -> success = 0;
			$response -> message = "Failed!";
			header('Content-Type: application/json');
			echo json_encode($response);
	}

?>