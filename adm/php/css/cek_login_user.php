<?php
session_start();
//mendapatkan inputan
// $username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//deklarasi untuk pengacak password

if ($_POST) {
    // cek password
    //$username = md5($pengacak . md5($username) . $pengacak);	
	$pengacak = '!*(*12)#?Q?12M41Q21@aabrld*W*^&&^#)L_@GH@*#^';					
	// $pass = sha1(md5($pengacak . md5($password) . $pengacak));
    $pass = md5($password);

    $login = new loginUser();
    $hasil = $login->cekLoginUser($email, $pass);
	$pass;

    if($hasil !== false){
        $_SESSION['login'] = true;
        $_SESSION['nama_lengkap'] = $hasil[nama_lengkap];
        $_SESSION['sesion_id'] = $hasil[id_user];
        $_SESSION['username'] = $hasil[username];
        $_SESSION['email'] = $hasil[email];
        $_SESSION['password'] = $pass;

        echo "<script type='text/javascript'>alert('Selamat Datang $_SESSION[nama_lengkap]');document.location='https://batukotaku.000webhostapp.com?email=$_SESSION[email]'</script>";
    }else{
        $_SESSION['email'] = $email;

        echo "<script type='text/javascript'>alert('Login Gagal, Username Dan Password Tidak Valid');document.location='?kwb=lg&login=form'</script>";
    }

}
?>
