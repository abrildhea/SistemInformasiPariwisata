<?php
error_reporting(0);
$usr= $_REQUEST["usr"];
switch ($usr) {

    case 'v':
        require "v.php";
    break;

    case 'det':
        require "det.php";
    break;
}
?>