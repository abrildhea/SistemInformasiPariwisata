<?php
error_reporting(0);
require "php/js/koneksi.php";
require "php/css/class_login.php";

$and = isset($_REQUEST["and"]) ? $_REQUEST['and'] : null;
switch ($and){

default:
	require "html/login/form.php";
break;

case 'daftar':
	require "html/login/dft.php";
	break;

case "cek_login":
	require "php/css/cek_login.php";
break;

case 'add':
        $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        // enkripsi password
        // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $profil = $_POST['profil'];
        $password=md5($_POST['password']);
        $konfirmPassword = md5($_POST['konfirmPassword']);
        // $password = $_POST['password'];

        $cekUsername = $kon->prepare("SELECT * FROM admin WHERE username = :username");
		$cekUsername->bindParam(':username', $username);

		if ($cekUsername -> execute()) {
			if ($cekUsername ->fetchColumn() > 0) {
				session_start();

            	$_SESSION = array(
            		'nama' => $nama,
            		'email' => $email,
            		'profil' => $profil
            	);
				echo "<script type=\"text/javascript\">alert('Username Admin Sudah Tersedia!');document.location='?and=daftar';</script>";
			}else{

        if($password == $konfirmPassword) {
        try {
            $sql = "INSERT INTO admin SET nama = :nama, email = :email, username = :username, profil = :profil, password = :password";
                    $stmt = $kon->prepare($sql);
                    $stmt->bindParam(':nama', $nama);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':profil', $profil);
                    $stmt->bindParam(':password', $password);
                    $stmt->execute();
                }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
            if($stmt) {
                echo "<script type=\"text/javascript\">alert('Data Berhasil Disimpan');document.location='https://batukotaku.000webhostapp.com/adm/';</script>";
            }
        }else{
        	session_start();

            	$_SESSION = array(
            		'nama' => $nama,
            		'email' => $email,
            		'username' => $username,
            		'profil' => $profil
            	);
            echo "<script type=\"text/javascript\">alert('Password Tidak Sama');document.location='?and=daftar';</script>";
        }
        }
		}
    break;
}
?>
