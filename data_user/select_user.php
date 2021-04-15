<?php 

    require_once '../connection/conn.php';
    $email = $_POST['email'];
    
    $view = $conn->prepare("SELECT * FROM user WHERE email = :email");
    $view->bindParam(':email', $email);
    $view->execute();

    $view_data = null;
    while ($data = $view -> fetch(PDO::FETCH_ASSOC)) {
    	$view_data[] = $data;
    }

    if( is_null($view_data)) {
        $status = false;
    } else {
		$status = true;
    }

    header('Content-Type: application/json');
    $response = ['status' => $status, 'data_user' => $view_data];
    echo json_encode($response);

?>