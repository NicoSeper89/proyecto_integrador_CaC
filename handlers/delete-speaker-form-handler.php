<?php
$speakerId = $_POST["speaker_id"];

include("../includes/speakerCRUD.php");

$deleted = deleteSpeaker($speakerId);

header("Location: https://trabajointegradorcursophp.000webhostapp.com/?deleteResult=" . ($deleted ? "success" : "failed") . "&page=speakers");
exit();
