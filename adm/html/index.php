<?php  
error_reporting(0);  
require '../php/js/koneksi.php';
require '../php/css/class_login.php';

session_start();
if (!$_SESSION['login']) {
    echo "<script type=\"text/javascript\">alert('Anda harus login terlebih dahulu untuk mengakses halaman ini!');document.location='../index.php';</script>";
    exit;
}

$admin = $_REQUEST['admin'];  
switch ($admin){  

    default :  
    require 'view/h.php';  
    require 'view/n.php';  
    require 'view/m.php';  
    require 'view/f.php';  
    break;

	case 'kcm':
    require 'view/h.php';
    require 'view/n.php';
    require 'kec/index.php';
    require 'view/f.php';
    break;

    case 'lg':
    require 'login/index.php';
    break;

    case 'ct':
    require 'cetak/index.php';
    break;

    case 'twst':
    require 'view/h.php';
    require 'view/n.php';
    require 'tp_wisata/index.php';
    require 'view/f.php';
    break;

    case 'ad':
    require 'view/h.php';
    require 'view/n.php';
    require 'adm/index.php';
    require 'view/f.php';
    break;

    case 'ws':
    require 'view/h.php';
    require 'view/n.php';
    require 'wis/index.php';
    require 'view/f.php';
    break;

    case 'us':
    require 'view/h.php';
    require 'view/n.php';
    require 'usr/index.php';
    require 'view/f.php';
    break;

    case 'logout':  
        unset($_SESSION['login']);
        session_destroy();
        echo "<script type=\"text/javascript\">alert('Berhasil Logout!');document.location='../';</script>";
    break;
}  
?> 