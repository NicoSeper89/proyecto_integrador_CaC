<?php
include('includes/speakerCRUD.php');
define('URL_BASE', 'http://localhost/proyecto_integrador_CaC');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/styles.css" />
</head>

<body class="d-flex flex-column justify-content-between" style="min-height: 100vh;">

    <div class="d-flex flex-column justify-content-start gap-3 py-0 m-0">
        <?php include('components/navBar.php'); ?>

        <h1 class="text-center py-1 text-primary">ORADORES</h1>

        <div class="px-5">
            <table class="table gap-3">

                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Fecha Registro</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $result = getSpeakers();

                    foreach ($result as $speaker) {
                    ?>
                        <tr>
                            <td><?php echo $speaker['nombre'] . " " . $speaker['apellido']; ?></td>
                            <td><?php echo $speaker['mail']; ?></td>
                            <td><?php echo $speaker['tema']; ?></td>
                            <td><?php echo $speaker['fecha_alta']; ?></td>
                            <td class="d-flex justify-content-end gap-3">
                                <button type="button" class="btn btn-outline-success p-2 py-0" data-bs-toggle="modal" data-bs-target="#updateSpeakerModal<?php echo $speaker['id_orador']; ?>" data-id="updateSpeakerModal<?php echo $speaker['id_orador']; ?>">
                                    ACTUALIZAR
                                </button>
                                <button type="button" class="btn btn-outline-danger p-2 py-0" data-bs-toggle="modal" data-bs-target="#deleteSpeakerModal<?php echo $speaker['id_orador']; ?>" data-id="deleteSpeakerModal<?php echo $speaker['id_orador']; ?>">
                                    ELIMINAR
                                </button>
                            </td>
                        </tr>
                    <?php
                        require "components/deleteSpeakerModal.php";
                        require "components/updateSpeakerModal.php";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include('components/footer.php'); ?>

    <script src="<?php echo URL_BASE ?>/assets/js/formSpeakerValidator.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>