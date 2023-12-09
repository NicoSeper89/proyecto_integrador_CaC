<?php
include('includes/speakerCRUD.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="px-5 py-1 m-0">
    <h1 class="text-center py-1 display-2 text-primary">ORADORES</h1>
    <div class="list-group gap-3">

        <?php

        $result = getSpeakers();

        foreach ($result as $speaker) {
        ?>
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $speaker['nombre'] . " " . $speaker['apellido']; ?></h5>
                    <small><?php echo $speaker['fecha_alta']; ?></small>
                </div>
                <p class="mb-1"><?php echo $speaker['tema']; ?></p>
                <small><?php echo $speaker['mail']; ?></small>
            </a>
        <?php
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>