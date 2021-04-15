<?php
error_reporting(0);
$cetak= $_REQUEST["cetak"];
switch ($cetak) {

    case 'c':
        require "print.php";
    break;
}
?>