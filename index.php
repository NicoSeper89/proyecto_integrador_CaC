<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'index';

$pages = ['index', 'tickets', 'speakers'];

if (!in_array($page, $pages)) {
    header("Location: /proyecto_integrador_CaC/?page=index"); 
    exit();
}

include("./pages/$page.php");
