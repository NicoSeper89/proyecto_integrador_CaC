<?php

$speakerId = $_POST["speaker_id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$subject = $_POST["subject"];

include("../includes/speakerCRUD.php");

updateSpeaker($speakerId, $name, $surname, $email, $subject);

header("Location: /proyecto_integrador_CaC/?page=speakers");
exit();
