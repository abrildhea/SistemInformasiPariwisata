<?php  
error_reporting(0);  
session_start();  
require 'adm/php/js/koneksi.php';
require "adm/php/css/class_login_user.php";
$kwb = $_REQUEST['kwb'];  
switch ($kwb){  
    default :  
    require 'view/h.php';  
    require 'view/n.php';  
    require 'view/m.php';  
    require 'view/f.php';  
    break;

    case 'lg':
        // require 'view/h.php';
        // require 'view/n.php';
        require 'login/index.php';
        // require 'view/f.php';
        break;

    case 'dt':
        require 'view/h.php';
        require 'view/n.php';
        require 'det/index.php';
        require 'view/f.php';
        break;

    case 'abouts':
     	require 'view/h.php';
        require 'view/n.php';
     	require 'abouts/index.php';
     	require 'view/f.php';
     	break;

    case 'contact':
        require 'view/h.php';
        require 'view/n.php';
        require 'contact/index.php';
        require 'view/f.php';
        break;

    case 'wst':
        require 'view/h.php';
        require 'view/nwst.php';
        require 'wisata/index.php';
        require 'view/f.php';
        break;

    case 'profil':
        require 'view/h.php';
        require 'view/n.php';
        require 'profil/index.php';
        require 'view/f.php';
        break;

        case 'logout':  
        unset($_SESSION['login']);
        session_destroy();
        echo "<script type=\"text/javascript\">alert('Berhasil Logout!');document.location='https://batukotaku.000webhostapp.com/';</script>";
    break;
}  
?> 