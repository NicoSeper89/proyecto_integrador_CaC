<?php

$speakerId = $_POST["speaker_id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$subject = $_POST["subject"];

include("../includes/speakerCRUD.php");

updateSpeaker($speakerId, $name, $surname, $email, $subject);

header("Location: https://trabajointegradorcursophp.000webhostapp.com/?page=speakers");
exit();
