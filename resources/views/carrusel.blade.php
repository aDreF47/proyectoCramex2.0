<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrusel Dinámico</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  
  </style>
</head>

<body>
  <x-nav-bar/>
  
  <!-- Noticias Destacadas -->
  <section class="news-section py-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="15000">
      <div class="carousel-inner" id="carousel-content" >
          <!-- Aquí se cargarán las imágenes dinámicamente -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Educación Sin Límites -->
  <section class="education-section py-5 bg-light">
    <div class="container text-center">
      <h2 class="section-title">Educación Sin Límites</h2>
      <p class="mb-5">Formando líderes para un mundo cambiante con nuestro enfoque innovador.</p>
      <div class="row">
        <div class="col-md-4">
          <img src="/images/icon-colegio.png" alt="Colegio">
          <h5 class="mt-3">Colegio</h5>
          <p>Admisión, Niveles, Sedes</p>
        </div>
          <div class="col-md-4">
          <img src="/images/icon-academia.png" alt="Academia">
          <h5 class="mt-3">Academia</h5>
          <p>Ciclos, Solucionarios, Sedes</p>
        </div>
        <div class="col-md-4">
          <img src="/images/icon-taller.png" alt="Talleres">
          <h5 class="mt-3">Talleres</h5>
          <p>Ajedrez, Matematica, Natación, Voley, etc.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Novedades -->
  <section class="novelties-section py-5">
    <div class="container">
      <h2 class="section-title">Novedades</h2>
      <div class="row">
        <div class="col-md-3">
          <img src="/images/misionvision.png" alt="Novedad 1" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 1</p>
        </div>
        <div class="col-md-3">
          <img src="/images/sistema-pagos.avif" alt="Novedad 2" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 2</p>
        </div>
        <div class="col-md-3">
          <img src="path/to/novelty3.jpg" alt="Novedad 3" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 3</p>
        </div>
        <div class="col-md-3">
          <img src="path/to/novelty4.jpg" alt="Novedad 4" class="img-fluid rounded">
          <p class="mt-2 text-center">Título de la novedad 4</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Redes de Contacto -->
  <section class="contact-section py-5 bg-light">
      <div class="container text-center">
        <h2 class="section-title">Contáctanos</h2>
        <p>Comunícate directamente con nuestras sedes.</p>
      <div class="d-flex justify-content-center">
        <div class="contact-icons">
          <img src="path/to/whatsapp-icon.png" alt="WhatsApp">
          <span>997594975</span>
        </div>
        <div class="contact-icons">
          <img src="/images/telefono.png" alt="Teléfono">
          <span>(01) 6805300</span>
        </div>
        <div class="contact-icons">
          <img src="path/to/email-icon.png" alt="Email">
          <span>contactanos@sacooliveros.edu.pe</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>NOSOTROS</h5>
          <ul>
            <li><a href="#">¿Quiénes somos?</a></li>
            <li><a href="#">Programa de talentos</a></li>
            <li><a href="#">Premios y distinciones</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>COLEGIOS</h5>
          <ul>
            <li><a href="#">Admisión</a></li>
            <li><a href="#">Niveles</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>ACADEMIAS</h5>
          <ul>
            <li><a href="#">Solucionarios</a></li>
            <li><a href="#">Ciclos virtuales</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>CEBA</h5>
          <ul>
            <li><a href="#">¿Qué es CEBA?</a></li>
            <li><a href="#">Sedes</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-3">
        <p>© Sociedad Saco Oliveros SAC - RUC: 20284670796</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      fetch('/api/carousel-images')
        .then(response => response.json())
        .then(data => {
          const carouselContent = document.getElementById('carousel-content');
          data.forEach((image, index) => {
            const activeClass = index === 0 ? 'active' : '';
            carouselContent.innerHTML += `
              <div class="carousel-item ${activeClass}">
                <img src="${image.image_path}" class="d-block w-100" alt="${image.title}">
              </div>
            `;
          });
        });
    });
    </script>
  </body>
</html>
