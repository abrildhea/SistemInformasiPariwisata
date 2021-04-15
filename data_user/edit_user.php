<?php

	require_once '../connection/conn.php';
	class usr{}

	$nama_lengkap		=	$_POST['nama_lengkap'];
	$email 				= 	$_POST['email'];
	$username 			= 	$_POST['username'];
	$password 			=	md5($_POST['password']);
	$image_user 		=	$_FILES['image_user']['name'];
	$tmp 				= 	$_FILES['image_user']['tmp_name'];

		if (!empty($image_user)) {
		$path = "../data_user/foto_user/".$image_user;

		if (move_uploaded_file($tmp, $path)) {
			$updateUserWithImage = $conn->prepare("UPDATE user SET nama_lengkap = :nama_lengkap,  username = :username, password = :password, image_user = :image_user WHERE email = :email");
			$updateUserWithImage->bindParam(':nama_lengkap', $nama_lengkap);
			$updateUserWithImage->bindParam(':email', $email);
			$updateUserWithImage->bindParam(':username', $username);
			$updateUserWithImage->bindParam(':password', $password);
			$updateUserWithImage->bindParam(':image_user', $image_user);

			if ($updateUserWithImage -> execute()) {
				header('Content-Type: application/json');
				$response = new usr();
				$response -> success = 1;
				$response -> message = "Success Update Akun With Image!";
				echo json_encode($response);
			} else {
				header('Content-Type: application/json');
				$response = new usr();
				$response -> success = 2;
				$response -> message = "Error Update Akun With Image!";
				echo json_encode($response);
			}
		}
		
	} else if(empty($image_user)) {
		$updateUser = $conn->prepare("UPDATE user SET nama_lengkap = :nama_lengkap, username = :username, password = :password WHERE email = :email");
		$updateUser->bindParam(':nama_lengkap', $nama_lengkap);
		$updateUser->bindParam(':email', $email);
		$updateUser->bindParam(':username', $username);
		$updateUser->bindParam(':password', $password);

		if ($updateUser -> execute() ) {
			header('Content-Type: application/json');
			$response = new usr();
			$response -> success = 1;
			$response -> message = "Success Update Akun!";
			echo json_encode($response);
		} else {
			header('Content-Type: application/json');
			$response = new usr();
			$response -> success = 2;
			$response -> message = "Error Update Akun!";
			echo json_encode($response);
		}

	}else{

	}

?>