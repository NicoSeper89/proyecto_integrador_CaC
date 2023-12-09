<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tickets</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="http://localhost/proyecto_integrador_CaC/assets/css/tickets-styles.css" />
    <link rel="stylesheet" href="http://localhost/proyecto_integrador_CaC/assets/css/styles.css" />
  </head>
  <body>
    <nav
      id="nav-bar"
      class="navbar navbar-expand-lg bg-body-tertiary bg-dark"
      data-bs-theme="dark"
    >
      <div class="container">
        <a class="navbar-brand" href="http://localhost/proyecto_integrador_CaC/?page=index"> Conf Bs As </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="http://localhost/proyecto_integrador_CaC/?page=index"
              >La conferencia</a
            >
            <a class="nav-link" href="http://localhost/proyecto_integrador_CaC/?page=index#speakers">Los oradores</a>
            <a class="nav-link" href="http://localhost/proyecto_integrador_CaC/?page=index#bsas-card"
              >El lugar y la fecha</a
            >
            <a class="nav-link" href="http://localhost/proyecto_integrador_CaC/?page=index#contact-form"
              >Conviértete en orador</a
            >
            <a class="nav-link link-success" href="http://localhost/proyecto_integrador_CaC/?page=tickets">Comprar tickets</a>
          </div>
        </div>
      </div>
    </nav>

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
            <input
              required
              type="text"
              class="form-control form-input"
              id="form-name"
              name="formName"
              placeholder="Nombre"
              aria-label="nombre"
            />
          </div>
          <div class="col-6 py-1">
            <input
              required
              type="text"
              class="form-control form-input"
              id="form-surname"
              name="formSurname"
              placeholder="Apellido"
              aria-label="apellido"
            />
          </div>
          <div class="col-12 py-1">
            <input
              required
              type="email"
              class="form-control form-input"
              id="form-email"
              name="formEmail"
              placeholder="Correo"
              aria-label="correo"
            />
          </div>
          <div class="col-6 text-start py-1">
            <label for="form-amount" class="form-label"
              >Cantidad</label
            >
            <input
              required
              type="number"
              min="0"
              class="form-control form-input"
              id="form-amount"
              name="formAmount"
              placeholder="cantidad"
              aria-label="cantidad de tickets"
            />
          </div>
          <div class="col-6 text-start py-1">
            <label for="form-categories" class="form-label"
              >Categoria</label
            >
            <select
              required
              class="form-select"
              id="form-categories"
              name="formCategories"
              aria-label="categorias"
            >
              <option selected disabled value="">Categoria</option>
              <option value="80">Estudiante</option>
              <option value="50">Trainee</option>
              <option value="15">Junior</option>
            </select>
          </div>
          <div class="col-12 my-2">
            <div
              class="alert alert-info mt-3 text-start text-primary"
              id="formAlert"
              role="alert"
            >
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

    <footer id="footer" class="mt-4">
      <ul class="nav justify-content-center align-items-center py-4 fs-6">
        <li class="nav-item">
          <a class="nav-link active text-white" href="#"
            >Preguntas frecuentes</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contáctanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Prensa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Conferencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Términos y condiciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Privacidad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Estudiantes</a>
        </li>
      </ul>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="http://localhost/proyecto_integrador_CaC/assets/js/tickets.js"></script>
  </body>
</html>
