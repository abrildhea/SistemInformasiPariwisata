<?php
error_reporting(0);
$det = $_REQUEST["det"];
switch ($det) {

	case 'akun':
		require 'akun.php';
	break;
}
?>