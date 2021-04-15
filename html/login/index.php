<?php
error_reporting(0);
$login = $_REQUEST["login"];
switch ($login) {

	case 'cek_login':
		require 'adm/php/css/cek_login_user.php';
	break;
	
	case 'form':
		require 'form.php';
	break;
	case 'dft':
		require 'dft.php';
	break;
		
	// default :
	// 	require 'login.php';
	// break;

	case 'daftar':
        $nama_lengkap	 	= 	filter_input(INPUT_POST, 'nama_lengkap', FILTER_SANITIZE_STRING);
        $email			 	= 	filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $username		 	= 	filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        // enkripsi password
        $password			=	md5($_POST['password']);
        $konfirmPassword	= 	md5($_POST['konfirmPassword']);

        $image_user			= 	$_FILES['image_user']['name'];
        $tmp			 	= 	$_FILES['image_user']['tmp_name'];
        // Rename nama image_usernya dengan menambahkan tanggal dan jam upload
        // $image_userbaru 	= 	date('dmYHis').$image_user; ga digae, soale ngko nek nd andorid e bingung
        $path 				= 	"data_user/foto_user/".$image_user;

        $cekEmail = $kon->prepare("SELECT * FROM user WHERE email = :email");
		$cekEmail->bindParam(':email', $email);

		if ($cekEmail -> execute()) {
			if ($cekEmail ->fetchColumn() > 0) {
            	session_start();

            	$_SESSION = array(
            		'nama' => $nama_lengkap,
            		'username' => $username
            	);
				echo "<script type=\"text/javascript\">alert('Akun Email Sudah Tersedia!');document.location='?kwb=lg&login=dft';</script>";
			}else{

        if (move_uploaded_file($tmp, $path)) {
        	if($password == $konfirmPassword) {
	            try {
	                $sql = "INSERT INTO user SET nama_lengkap = :nama_lengkap, email = :email, username = :username, password = :password, image_user = :image_user";
	                        $stmt = $kon->prepare($sql);
	                        $stmt->bindParam(':nama_lengkap', $nama_lengkap);
	                        $stmt->bindParam(':email', $email);
	                        $stmt->bindParam(':username', $username);
	                        $stmt->bindParam(':password', $password);
	                        $stmt->bindParam(':image_user', $image_user);
	                        $stmt->execute();
	                }
	                catch(PDOException $e) {
	                    echo $e->getMessage();
	                }
	                
	                if($stmt) {
	                    echo "<script type=\"text/javascript\">alert('Berhasil Daftar Akun');document.location='?kwb=lg&login=form';</script>";
	                }
            }else{
            	session_start();

            	$_SESSION = array(
            		'nama' => $nama_lengkap,
            		'email' => $email,
            		'username' => $username
            	);

                echo "<script type=\"text/javascript\">alert('Password Tidak Sama, Ulangi Dengan Benar!');document.location='?kwb=lg&login=dft';</script>";
            }
        }else{
        	echo "<script type=\"text/javascript\">alert('Gagal Daftar!');document.location='?kwb=lg&login=form';</script>";
        }
        }
		}
    break;
}
?>