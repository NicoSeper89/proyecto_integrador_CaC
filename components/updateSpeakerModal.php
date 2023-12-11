<div class="modal fade z-50" id="updateSpeakerModal<?php echo $speaker['id_orador']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateSpeakerModalLabel<?php echo $speaker['id_orador']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateSpeakerModalLabel<?php echo $speaker['id_orador']; ?>">Actualizar Orador</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="handlers/update-speaker-form-handler.php" method="post">
                    <input type="hidden" name="speaker_id" id="<?php echo $speaker['id_orador']; ?>" value="<?php echo $speaker['id_orador']; ?>">
                    <div class="container">
                        <div class="row gap-2">
                            <div class="col-12 p-0">
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre" value="<?php echo $speaker['nombre']; ?>" />
                            </div>
                            <div class="col-12 p-0">
                                <input type="text" class="form-control" id="inputSurname" name="surname" placeholder="Apellido" value="<?php echo $speaker['apellido']; ?>" />
                            </div>
                            <div class="col-12 p-0">
                                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?php echo $speaker['mail']; ?>" />
                            </div>
                            <div class="form-floating col-12 p-0">
                                <textarea type="text" class="form-control" id="floatingTextarea" name="subject" placeholder="¿Sobre qué quieres hablar?"><?php echo $speaker['tema']; ?></textarea>
                                <label for="floatingTextarea">¿Sobre qué quieres hablar?</label>
                            </div>
                            <div class="col-12 p-0">
                                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                            <div class="col-12 p-0">
                                <button type="submit" class="btn btn-success w-100" id="submitButton">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>