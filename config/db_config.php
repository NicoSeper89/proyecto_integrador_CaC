<?php

$host = 'localhost'; 
$user = 'id21332074_trabajointegradorcursophp';
$pass = 'Probando1.';
$data_base = 'id21332074_db_php_pf';

$db = new mysqli($host, $user, $pass, $data_base);

if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}

