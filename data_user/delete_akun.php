<?php

	require_once '../connection/conn.php';
	class usr{};

	$email = $_POST['email'];

	if (empty($email)) {
		header('Content-Type: application/json');
		$response = new usr();
		$response -> success = 0;
		$response -> message = "Email kosong!";
		echo json_encode($response);

	} else {

		$sql = $conn->prepare("SELECT image_user FROM user WHERE email = :email");
        $sql->bindParam(':email', $email);
        $sql->execute();
        $data = $sql->fetch();

     
        if(is_file("foto_user/".$data['image_user'])) 
            unlink("foto_user/".$data['image_user']); 

            $sql = $conn->prepare("DELETE FROM user WHERE email = :email");
            $sql->bindParam(':email', $email);
            $execute = $sql->execute();

            if($execute){
                	header('Content-Type: application/json');
					$response = new usr();
					$response -> success = 1;
					$response -> message = "Success Delete Akun!";
					echo json_encode($response);
                }else{
                	header('Content-Type: application/json');
					$response = new usr();
					$response -> success = 2;
					$response -> message = "Failed Delete Akun!";
					echo json_encode($response);
                }
	}

?>