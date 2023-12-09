<?php

include('config/db_config.php');

function getSpeakers() {

    global $db;

    $sql = "SELECT * FROM oradores";
    $result = $db->query($sql);

    return $result;
}

?>
