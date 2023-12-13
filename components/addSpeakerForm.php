<form class="row g-3 form" action="handlers/add-speaker-form-handler.php" method="post" id="form1">
    <div class="col-6">
        <input type="text" class="inputText1 form-control" id="inputName" name="name" maxlength="30" placeholder="Nombre" autocomplete="off"/>
        <div id="inputName" class="invalid-feedback">
            Ingrese su nombre
        </div>
    </div>
    <div class="col-6">
        <input type="text" class="inputText1 form-control" id="inputSurname" name="surname" maxlength="30" placeholder="Apellido" autocomplete="off"/>
        <div id="inputSurname" class="invalid-feedback">
            Ingrese su apellido
        </div>
    </div>
    <div class="col-12">
        <input type="email" class="inputText1 form-control" id="inputEmail" name="email" maxlength="30" placeholder="Email" autocomplete="off"/>
        <div id="inputEmail" class="invalid-feedback">
            Ingrese su email
        </div>
    </div>
    <div class="col-12">
        <textarea type="text" class="inputText1 form-control" id="inputSubject" name="subject" maxlength="60" placeholder="Sobre qué quieres hablar?" autocomplete="off" ></textarea> 
        <div id="inputSubject" class="invalid-feedback">
            Ingrese un título para su charla
        </div>
        <p class="fw-lighter text-muted mb-2">
            Recuerda incluir un titulo para tu charla
        </p>
    </div>
    <div class="col-12 m-0">
        <input type="submit" class="btn btn-success w-100" id="submitButton" />
    </div>
</form>

<script src="<?php echo URL_BASE ?>/assets/js/formSpeakerValidator.js"></script>