<?php
error_reporting(0);

define('LOCALHOST', 'localhost');
define('USERNAME', 'id14866001_user');
define('PASSWORD', 'Fkf3Afb45gB@]cSw');
define('DATABASE', 'id14866001_batu_kotaku');

$kon = new PDO("mysql:host=" . LOCALHOST . ";dbname=" . DATABASE, USERNAME, PASSWORD, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
?>