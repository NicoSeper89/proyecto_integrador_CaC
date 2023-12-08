<?php

$host = 'localhost'; 
$user = 'root';
$pass = '';
$data_base = 'integrador_cac';

$db = new mysqli($host, $user, $pass, $data_base);

if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}

