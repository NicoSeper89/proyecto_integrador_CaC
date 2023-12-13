<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'index';

$pages = ['index', 'tickets', 'speakers'];

if (!in_array($page, $pages)) {
    header("Location: https://trabajointegradorcursophp.000webhostapp.com/?page=index"); 
    exit();
}

include("./pages/$page.php");
