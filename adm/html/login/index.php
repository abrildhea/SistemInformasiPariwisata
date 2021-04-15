<?php
$p = $_REQUEST["p"];
switch ($p) {

	case 'c':
		require 'php/css/cek_login.php';
	break;
	
	// case 'cc':
	// 	require 'php/css/cek_login2.php';
	// break;
		
	default :
		require 'login.php';
	break;
}
?>