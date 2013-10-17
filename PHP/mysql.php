<?php
$mysql = new mysqli('localhost', 'datacom_cloudsma', 'datacom', 'datacom_cloudsmash');

if ($mysql->connect_errno) {
    printf("Connect failed: %s\n", $mysql->connect_error);
    exit();
}
?>