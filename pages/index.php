<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="http://localhost/proyecto_integrador_CaC/assets/css/styles.css" />
  </head>
  <body>
    <!-- Nav Bar -->

    <?php include('components/navBar.php'); ?>

    <!-- Carousel Home -->

    <header
      class="position-relative d-flex justify-content-end align-items-center"
    >
      <div id="homeCard" class="card text-end z-3 position-absolute text-white">
        <div class="card-body">
          <h1 class="card-title">Conf Bs As</h1>
          <p class="card-text">
            Bs As llega por primera vez a Argentina. Un evento para compartir
            con nuestra comunidad el conocimiento y experiencia de los expertos
            que están creando el futuro de Internet. Ven a conocer a miembros
            del evento, a otros estudiantes de Codo a Codo y los oradores de
            primer nivel que tenemos para ti. Te esperamos!
          </p>
          <a href="http://localhost/proyecto_integrador_CaC/?page=index#contact-form" class="btn btn-outline-light">Quiero ser orador</a>
          <a href="http://localhost/proyecto_integrador_CaC/?page=tickets" class="btn btn-success">Comprar tickets</a>
        </div>
      </div>
      <div id="carouselFade" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselFade"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselFade"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselFade"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="overlay z-2"></div>
            <img
              src="http://localhost/proyecto_integrador_CaC/assets/images/ba1.jpg"
              class="d-block w-100"
              alt="carouselImage1"
            />
          </div>
          <div class="carousel-item">
            <div class="overlay z-2"></div>
            <img
              src="http://localhost/proyecto_integrador_CaC/assets/images/ba2.jpg"
              class="d-block w-100"
              alt="carouselImage2"
            />
          </div>
          <div class="carousel-item">
            <div class="overlay z-2"></div>
            <img
              src="http://localhost/proyecto_integrador_CaC/assets/images/ba3.jpg"
              class="d-block w-100"
              alt="carouselImage3"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev z-3"
          type="button"
          data-bs-target="#carouselFade"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next z-3"
          type="button"
          data-bs-target="#carouselFade"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>

    <!-- Speakers Cards -->

    <main id="speakers" class="container">
      <div class="text-center mt-3 mt-2">
        <span>CONOCE A LOS</span>
        <h2>ORADORES</h2>
      </div>
      <div
        class="row row-cols-1 row-cols-md-3 g-2 justify-content-center align-items-stretch"
      >
        <div class="col">
          <div class="card">
            <img
              src="http://localhost/proyecto_integrador_CaC/assets/images/steve.jpg"
              class="card-img-top d-block"
              alt="new1"
            />
            <div class="card-body">
              <span class="badge bg-warning text-dark">JavaScript</span>
              <span class="badge bg-info text-writh">React</span>
              <h5 class="card-title">Steve Jobs</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                consectetur facere nostrum ex harum illum consequatur a
                necessitatibus? Ipsum incidunt provident ipsam praesentium nam
                in dicta? Obcaecati unde minus nulla.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="http://localhost/proyecto_integrador_CaC/assets/images/bill.jpg" class="card-img-top" alt="new2" />
            <div class="card-body">
              <span class="badge bg-warning text-dark">JavaScript</span>
              <span class="badge bg-info text-writh">React</span>
              <h5 class="card-title">Bill Gates</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                consectetur facere nostrum ex harum illum consequatur a
                necessitatibus? Ipsum incidunt provident ipsam praesentium nam
                in dicta? Obcaecati unde minus nulla.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="http://localhost/proyecto_integrador_CaC/assets/images/ada.jpeg" class="card-img-top" alt="new3" />
            <div class="card-body">
              <span class="badge bg-secondary">Negocios</span>
              <span class="badge bg-danger">Startups</span>
              <h5 class="card-title">Ada Lovelace</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                consectetur facere nostrum ex harum illum consequatur a
                necessitatibus? Ipsum incidunt provident ipsam praesentium nam
                in dicta? Obcaecati unde minus nulla.
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- BsAs Card -->

    <section class="my-4" id="bsas-card">
      <div class="card text-white bg-dark mb-3">
        <div class="row g-0">
          <div class="col-md-6">
            <img
              src="http://localhost/proyecto_integrador_CaC/assets/images/honolulu.jpg"
              class="img-fluid rounded-start"
              alt="honolulu"
            />
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Bs As - Octubre</h5>
              <p class="card-text">
                Buenos Aires es la provincia y localidad más grande del estado
                de Argentina, en los Estados Unidos, Honolulu es la más sureña
                de entre las principales ciudades estadounidenses. Aunque el
                nombre de Honolulu se refiere al área urbana en la costa sureste
                de la isla de Oahu, la ciudad y el condado de Honolulu han
                formado una ciudad-condado consolidada que cubre todo la ciudad
                (aproximadamente 600 km2 de superficie).
              </p>
              <button type="button" class="btn btn-outline-light">
                Conocé más
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form -->

    <div
      class="container d-flex flex-column justify-content-center align-items-center"
      id="contact-form"
    >
      <div class="text-center">
        <span>CONVIÉRTETE EN UN</span>
        <h3>ORADOR</h3>
      </div>
      <span id="homeFormTitle" class="text-center mb-2">
        Anótate como orador para dar una
        <a href="http://localhost/proyecto_integrador_CaC/?page=index" class="text-dark">charla ignite</a>. Cuéntanos de qué quieres
        hablar!
      </span>
      <form class="row g-3" action="handlers/form-handler.php" method="post">
        <div class="col-6">
          <input
            type="text"
            class="inputText form-control"
            id="inputName"
            name="name"
            placeholder="Nombre"
          />
        </div>
        <div class="col-6">
          <input
            type="text"
            class="inputText form-control"
            id="inputSurname"
            name="surname"
            placeholder="Apellido"
          />
        </div>
        <div class="col-12">
          <input
            type="text"
            class="inputText form-control"
            id="inputEmail"
            name="email"
            placeholder="Email"
          />
        </div>
        <div class="col-12">
          <textarea
            type="text"
            class="form-control"
            id="inputSubject"
            name="subject"
            placeholder="Sobre qué quieres hablar?"
          ></textarea>
          <p class="fw-lighter text-muted">
            Recuerda incluir un titulo para tu charla
          </p>
        </div>
        <div class="col-12">
          <input
            type="submit"
            class="btn btn-success w-100 mb-2"
            id="submitButton"
          />
        </div>
      </form>
    </div>

    <!-- Footer -->

    <?php include('components/footer.php'); ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
