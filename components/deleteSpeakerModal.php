<div class="modal fade z-50" id="deleteSpeakerModal<?php echo $speaker['id_orador']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteSpeakerModalLabel<?php echo $speaker['id_orador']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteSpeakerModalLabel<?php echo $speaker['id_orador']; ?>">Eliminar Orador</h1>
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