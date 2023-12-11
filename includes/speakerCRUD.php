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

function updateSpeaker($speakerId, $name, $surname, $email, $subject) {

    global $db;

    $sql = "UPDATE oradores SET nombre = '$name', apellido = '$surname', mail = '$email', tema = '$subject' WHERE id_orador = '$speakerId'";
    $result = $db->query($sql);

    return $result;
}

function deleteSpeaker($speakerId) {
    
    global $db;

    $sql = "DELETE FROM oradores WHERE id_orador = '$speakerId'";
    $result = $db->query($sql);

    return $result;
}

?>
