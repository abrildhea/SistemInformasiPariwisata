<?php
session_start();
//mendapatkan inputan
$username = $_POST['username'];
$password = $_POST['password'];

//deklarasi untuk pengacak password

if ($_POST) {
    // cek password
    //$username = md5($pengacak . md5($username) . $pengacak);	
	$pengacak = '!*(*12)#?Q?12M41Q21@aabrld*W*^&&^#)L_@GH@*#^';					
	// $pass = sha1(md5($pengacak . md5($password) . $pengacak));
    $pass = md5($password);

    $login = new login();
    $hasil = $login->cekLogin($username, $pass);
	$pass;

    if($hasil !== false){
        $_SESSION['login'] = true;
        $_SESSION['nama'] = $hasil[nama];
        $_SESSION['sesi_id'] = $hasil[id_admin];
        $_SESSION['username'] = $hasil[username];
        $_SESSION['email'] = $hasil[email];
        $_SESSION['password'] = $pass;

        echo "<script type='text/javascript'>alert('Selamat Datang $_SESSION[nama]');document.location='html/index.php'</script>";
    }else{
        $_SESSION['username'] = $username;
        echo "<script type='text/javascript'>alert('Login Gagal, Username Dan Password Tidak Valid');document.location='https://batukotaku.000webhostapp.com/adm/'</script>";
    }

}
?>
