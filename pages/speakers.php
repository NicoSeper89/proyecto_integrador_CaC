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

<body>

    <?php include('components/navBar.php'); ?>


    <div class="px-5 py-1 m-0">
        <h1 class="text-center py-1 display-2 text-primary">ORADORES</h1>
        <div class="list-group gap-3">

            <?php

            $result = getSpeakers();

            foreach ($result as $speaker) {
            ?>
                <div class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo $speaker['nombre'] . " " . $speaker['apellido']; ?></h5>
                        <div>
                            <button type="button" class="btn btn-outline-danger p-2 py-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $speaker['id_orador']; ?>" data-id="<?php echo $speaker['id_orador']; ?>">
                                X
                            </button>
                        </div>
                    </div>
                    <small><?php echo $speaker['fecha_alta']; ?></small>
                    <p class="mb-1"><?php echo $speaker['tema']; ?></p>
                    <small><?php echo $speaker['mail']; ?></small>
                </div>
                <!-- Modal -->
                <div class="modal fade z-50" id="staticBackdrop<?php echo $speaker['id_orador']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?php echo $speaker['id_orador']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel<?php echo $speaker['id_orador']; ?>">Eliminar Orador</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Está seguro que desea eliminar al orador?
                            </div>
                            <div class="modal-footer">
                                <form action="handlers/delete-speaker-form-handler.php" method="post">
                                    <input type="hidden" name="speaker_id" id="<?php echo $speaker['id_orador']; ?>" value="<?php echo $speaker['id_orador']; ?>">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <?php include('components/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>