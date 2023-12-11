<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    include("../includes/speakerCRUD.php");

    $newSpeaker = addSpeaker($name, $surname, $email, $subject);

    header("Location: /proyecto_integrador_CaC/?newspeaker=" . ($newSpeaker? "success" : "failed") . "&page=index#contact-form");
    exit();

} else {
    echo "Acceso no permitido";
}
