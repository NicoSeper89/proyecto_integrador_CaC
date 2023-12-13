<div class="modal fade z-50" id="updateSpeakerModal<?php echo $speaker['id_orador']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateSpeakerModalLabel<?php echo $speaker['id_orador']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateSpeakerModalLabel<?php echo $speaker['id_orador']; ?>">Actualizar Orador</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2 form" action="handlers/update-speaker-form-handler.php" method="post" id="form<?php echo $speaker['id_orador']; ?>">
                    <input type="hidden" name="speaker_id" id="inputId<?php echo $speaker['id_orador']; ?>" value="<?php echo $speaker['id_orador']; ?>" autocomplete="off">

                    <div class="col-12 p-0 my-2">
                        <input type="text" class="inputText<?php echo $speaker['id_orador']; ?> form-control is-valid" id="inputName<?php echo $speaker['id_orador']; ?>" name="name" maxlength="30" placeholder="Nombre" autocomplete="off" value="<?php echo $speaker['nombre']; ?>" />
                        <div id="inputName<?php echo $speaker['id_orador']; ?>" class="invalid-feedback">
                            Ingrese su nombre
                        </div>
                    </div>

                    <div class="col-12 p-0 my-2">
                        <input type="text" class="inputText<?php echo $speaker['id_orador']; ?> form-control is-valid" id="inputSurname<?php echo $speaker['id_orador']; ?>" name="surname" maxlength="30" placeholder="Apellido" value="<?php echo $speaker['apellido']; ?>" autocomplete="off" />
                        <div id="inputSurname<?php echo $speaker['id_orador']; ?>" class="invalid-feedback">
                            Ingrese su apellido
                        </div>
                    </div>

                    <div class="col-12 p-0 my-2">
                        <input type="email" class="inputText<?php echo $speaker['id_orador']; ?> form-control is-valid" id="inputEmail<?php echo $speaker['id_orador']; ?>" name="email" maxlength="30" placeholder="Email" value="<?php echo $speaker['mail']; ?>" autocomplete="off" />
                        <div id="inputEmail" class="invalid-feedback">
                            Ingrese su email
                        </div>
                    </div>

                    <div class="form-floating col-12 p-0 my-2">
                        <textarea type="text" class="inputText<?php echo $speaker['id_orador']; ?> form-control is-valid" id="inputSubject<?php echo $speaker['id_orador']; ?>" name="subject" maxlength="60" placeholder="Sobre qué quieres hablar?"><?php echo $speaker['tema']; ?></textarea>
                        <label for="inputSubject<?php echo $speaker['id_orador']; ?>">¿Sobre qué quieres hablar?</label>
                        <div id="inputSubject<?php echo $speaker['id_orador']; ?>" class="invalid-feedback">
                            Ingrese un título para su charla
                        </div>
                    </div>

                    <div class="col-12 p-0 my-2">
                        <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancelar</button>
                    </div>

                    <div class="col-12 p-0 my-2">
                        <button type="submit" class="submitButton btn btn-success w-100">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>