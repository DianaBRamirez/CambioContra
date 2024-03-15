<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "EPHash");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->set_charset("utf8");
?>