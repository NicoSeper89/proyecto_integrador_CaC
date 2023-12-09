<?php

include(__DIR__ . '/../config/db_config.php');

function getSpeakers() {

    global $db;

    $sql = "SELECT * FROM oradores";
    $result = $db->query($sql);

    return $result;
}

function addSpeaker($name, $surname, $email, $subject) {

    global $db;

    $sql = "INSERT INTO oradores (nombre, apellido, mail, tema) VALUES ('$name', '$surname', '$email', '$subject')";
    $result = $db->query($sql);

    return $result;
}

?>
