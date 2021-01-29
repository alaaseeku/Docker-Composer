<?php
$mysqli = new mysqli("mysql", "root", "P@ssw0rd!2020", "mysql");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>
