<?php

require_once('config.php');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db){
    die('Error de conexión: ' . mysqli_connect_error());
}

// echo "<pre>";
// var_dump($db);
// echo "</pre>";

