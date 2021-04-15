<?php

	require_once '../connection/conn.php';
	class usr{}

	$nama_lengkap 	= 	$_POST['nama_lengkap'];
	$email 			= 	$_POST['email'];
	$username 		= 	$_POST['username'];
	$password 		= 	md5($_POST['password']);

	$cekEmail = $conn->prepare("SELECT * FROM user WHERE email = :email");
	$cekEmail->bindParam(':email', $email);
	if ($cekEmail -> execute()) {
		if ($cekEmail -> fetchColumn() > 0) {
				header('Content-Type: application/json');
				$response = new usr();
				$response -> success = 3;
				$response -> message = "Anda tidak dapat mendaftarkan akun email yang sama!";
				echo json_encode($response);
	    } else {
		    if ( (empty($nama_lengkap)) || (empty($email)) || (empty($username)) || (empty($username)) || (empty($password)) ) {
				header('Content-Type: application/json');
				$response = new usr();
				$response -> success = 2;
				$response -> message = "Tidak Boleh Kosong!";
				echo json_encode($response);
		    } else {
				$sql = $conn->prepare("INSERT INTO user(nama_lengkap, email, username, password) VALUES (:nama_lengkap, :email, :username, :password) ");
				$sql->bindParam(':nama_lengkap', $nama_lengkap);
				$sql->bindParam(':email', $email);
				$sql->bindParam(':username', $username);
				$sql->bindParam(':password', $password);

				if ($sql -> execute() ) {
					header('Content-Type: application/json');
					$response = new usr();
					$response -> success = 1;
					$response -> message = "Success!";
					echo json_encode($response);
				} else {
					header('Content-Type: application/json');
					$response = new usr();
					$response -> success = 0;
					$response -> message = "Oops! Ada yang error.";
					echo json_encode($response);
		    	}
			}
		}
	}

?>