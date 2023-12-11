<?php
$speakerId = $_POST["speaker_id"];

include("../includes/speakerCRUD.php");

$deleted = deleteSpeaker($speakerId);

header("Location: /proyecto_integrador_CaC/?deleteResult=" . ($deleted ? "success" : "failed") . "&page=speakers");
exit();
