<?php
define('URL_BASE', 'https://trabajointegradorcursophp.000webhostapp.com');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tickets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/tickets-styles.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/styles.css" />
</head>

<body>
  <?php include('components/navBar.php'); ?>


  <div class="container-fluid text-center mt-1 pt-1">
    <div class="row justify-content-center gap-2">
      <div class="col-2 border border-primary pt-4 category-box">
        <h3 class="fs-4">Estudiante</h3>
        <p class="fs-5 fw-normal">Tiene un descuento</p>
        <p class="fs-4 fw-semibold">80%</p>
        <p class="fs-6 fw-medium text-body-tertiary">
          * Presentar documentación
        </p>
      </div>
      <div class="col-2 border border-info pt-4 category-box">
        <h3 class="fs-4">Trainee</h3>
        <p class="fs-5 fw-normal">Tiene un descuento</p>
        <p class="fs-4 fw-semibold">50%</p>
        <p class="fs-6 fw-medium text-body-tertiary">
          * Presentar documentación
        </p>
      </div>
      <div class="col-2 border border-warning pt-4 category-box">
        <h3 class="fs-4">Junior</h3>
        <p class="fs-5 fw-normal">Tiene un descuento</p>
        <p class="fs-4 fw-semibold">15%</p>
        <p class="fs-6 fw-medium text-body-tertiary">
          * Presentar documentación
        </p>
      </div>
    </div>
    <div class="row pt-2">
      <span class="fs-6">VENTA</span>
      <h2 class="m-0">VALOR DE TICKET $200</h2>
    </div>
    <div class="row justify-content-center">
      <form id="ticketsForm" class="col-12 col-lg-9 col-xl-7 row justify-content-center gy-1">
        <div class="col-6 py-1">
          <input required type="text" class="form-control form-input" id="form-name" name="formName" placeholder="Nombre" aria-label="nombre" />
        </div>
        <div class="col-6 py-1">
          <input required type="text" class="form-control form-input" id="form-surname" name="formSurname" placeholder="Apellido" aria-label="apellido" />
        </div>
        <div class="col-12 py-1">
          <input required type="email" class="form-control form-input" id="form-email" name="formEmail" placeholder="Correo" aria-label="correo" />
        </div>
        <div class="col-6 text-start py-1">
          <label for="form-amount" class="form-label">Cantidad</label>
          <input required type="number" min="0" class="form-control form-input" id="form-amount" name="formAmount" placeholder="cantidad" aria-label="cantidad de tickets" />
        </div>
        <div class="col-6 text-start py-1">
          <label for="form-categories" class="form-label">Categoria</label>
          <select required class="form-select" id="form-categories" name="formCategories" aria-label="categorias">
            <option selected disabled value="">Categoria</option>
            <option value="80">Estudiante</option>
            <option value="50">Trainee</option>
            <option value="15">Junior</option>
          </select>
        </div>
        <div class="col-12 my-2">
          <div class="alert alert-info mt-3 text-start text-primary" id="formAlert" role="alert">
            Total a pagar: $0
          </div>
        </div>
        <div class="col-12 d-flex justify-content-between gap-3 py-1">
          <button class="btn btn-success w-50" type="reset">Borrar</button>
          <input class="btn btn-success w-50" type="submit" value="Resumen" />
        </div>
      </form>
    </div>
  </div>

  <?php include('components/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="<?php echo URL_BASE ?>/assets/js/tickets.js"></script>
</body>

</html>