<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/carrusel">
            <img src="/images/cramexlogo.png" alt="Logo" height="110">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-matricula dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Matrícula
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Proceso de Matrícula</a></li>
                        <li><a class="dropdown-item" href="#">Requisitos</a></li>
                        <li><a class="dropdown-item" href="#">Cronograma</a></li>
                        <li><a class="dropdown-item" href="#">Costos y Métodos de Pago</a></li>
                        <li><a class="dropdown-item" href="#">Procedimiento para Alumnos Nuevos</a></li>
                        <li><a class="dropdown-item" href="#">Procedimiento para Alumnos Antiguos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/nosotros') }}" role="button"
                        aria-expanded="false">
                        Nosotros
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="/nosotros#quienesSomos">¿Quienes somos?</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/nosotros#PropuestaEducativa">Propuesta educativa</a>
                                </li>
                                <li><a class="dropdown-item" href="/nosotros#MisiónyVisión">Misión y Visión</a></li>
                                <li><a class="dropdown-item" href="/nosotros#Objetivos">Objetivos</a></li>
                                <li><a class="dropdown-item" href="/nosotros#PalabrasDelDirector">Palabras del
                                        director</a></li>
                                <li><a class="dropdown-item" href="/nosotros#HimnoDeLaInstitución">Himno de la
                                        institución</a></li>
                                <li><a class="dropdown-item" href="/nosotros#InsigniaDeCramex">Insignia de Cramex</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Programa Talentos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/nosotros#Deportes">Deportes</a></li>
                                <li><a class="dropdown-item" href="/nosotros#SeleccionyOlimpiadas">Seleccion y
                                        Olimpiadas</a></li>
                                <li><a class="dropdown-item" href="/nosotros#PrimerosPuestos">Primeros Puestos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Novedades</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/nosotros#">Revistas</a></li>
                                <li><a class="dropdown-item" href="/nosotros#">Noticias</a></li>
                                <li><a class="dropdown-item" href="/nosotros#">Galeria de Fotos</a></li>
                                <li><a class="dropdown-item" href="/nosotros#">Galeria de Videos</a></li>
                                <li><a class="dropdown-item" href="/nosotros#">Redes Sociales</a></li>
                                <li><a class="dropdown-item" href="/nosotros#">En medios</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Niveles
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nivel Inicial</a></li>
                        <li><a class="dropdown-item" href="#">Nivel Primaria</a></li>
                        <li><a class="dropdown-item" href="#">Nivel Secundaria</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/talleres" role="button" aria-expanded="false">
                        Talleres
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Arte y Cultura</a></li>
                        <li><a class="dropdown-item" href="#">Deportes</a></li>
                        <li><a class="dropdown-item" href="#">Tecnología</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Uniforme Escolar</a></li>
                        <li><a class="dropdown-item" href="#">Libros</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Servicios de Pago</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pago de Matrícula</a></li>
                                <li><a class="dropdown-item" href="#">Pago de Pensiones Mensuales</a></li>
                                <li><a class="dropdown-item" href="#">Pago de uso de instalaciones</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Beneficios Incluidos con la Matrícula</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Intranet</a></li>
                                <li><a class="dropdown-item" href="#">Seguro Escolar</a></li>
                                <li><a class="dropdown-item" href="#">Carnet Estudiantil</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Responsabilidad Social</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Programas de Ayuda para Familias con Bajos
                                        Recursos</a></li>
                                <li><a class="dropdown-item" href="#">Voluntariado y Proyectos Comunitarios</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Concientización sobre Medio Ambiente y
                                        Valores</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Éxitos</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <div class="contact-info me-3" style="color: gray;">
                    <i class="bi bi-telephone"> <img src="/images/telefono.png" alt="telefono"
                            style="height: 20px;"> </i>
                    0882 121
                </div>
                <a href="#" class="btn btn-intranet me-2">Intranet</a>
                <a href="#" class="btn btn-contacto">Contáctenos</a>
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background-color: #FFC000;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1030;
        font-size: 18px;
        /* Aumenta el tamaño de la letra */
        font-weight: bold;
        /* Hace que el texto se vea más grueso */
    }

    .navbar-brand {
        font-weight: bold;
        color: #DD291B;
    }

    .nav-link {
        color: #000;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav-link:hover {
        color: #DD291B;
    }

    .nav-link.active {
        color: #007bff;
    }

    .dropdown-menu {
        background-color: #FFFFFF;
        border: 1px solid #DDDDDD;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 10px;
        transition: all 0.3s ease;
    }

    .dropdown-item {
        color: #000;
        font-weight: 500;
        padding: 8px 15px;
        border-radius: 6px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .dropdown-item:hover {
        background-color: #FFC000;
        /* Color destacado */
        color: #FFFFFF;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    /* Opcional: Transición suave al abrir la lista */
    .dropdown-menu.show {
        opacity: 0;
        transform: translateY(-10px);
        animation: fadeIn 0.3s forwards;
    }

    .dropdown-menu .dropdown-submenu {
        position: relative;
    }

    .dropdown-menu .dropdown-submenu .dropdown-menu {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        /* Coloca el submenú a la derecha del elemento padre */
        margin-top: -6px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1050;
    }

    .dropdown-menu .dropdown-submenu:hover .dropdown-menu {
        display: block;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-contacto {
        background-color: #00A54F;
        color: white;
        border-radius: 5px;
        padding: 5px 15px;
    }

    .btn-contacto:hover {
        background-color: #395723;
        color: #FFC000;
    }

    .btn-matricula {
        background-color: #DD291B;
        color: white;
        border-radius: 5px;
        padding: 5px 15px;
        font-size: 18px;
    }

    .btn-intranet {
        background-color: #007BFF;
        color: white;
        border-radius: 5px;
        padding: 5px 15px;
    }

    .contact-info {
        font-size: 1rem;
        color: #333;
        display: flex;
        align-items: center;
    }

    .contact-info i {
        margin-right: 10px;
    }

    body {
        padding-top: 100px;
        /* Add padding to avoid overlap with the fixed navbar */
        font-family: Arial, sans-serif, Garamond, monospace;
    }


    .Logo {
        position: relative;
        left: -10px;
        /* Mueve la imagen a la izquierda */
    }

    .section-title {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
        font-size: 2.5rem;
        font-weight: bold;
        color: #DD291B;
    }

    .news-section img {
        width: 100%;
        border-radius: 10px;
    }

    .contact-icons img {
        height: 40px;
        margin-right: 15px;
    }

    footer {
        background-color: #00448C;
        color: #FFFFFF;
        padding: 30px 0;
    }

    footer a {
        color: #FFD700;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }

    #carouselExample {
        height: 600px;
        /* Ocupa el 100% de la altura de la ventana */
        display: flex;
        justify-content: center;
        /* Centra horizontalmente */
        align-items: center;
        /* Centra verticalmente */
        overflow: hidden;
        /* Oculta cualquier contenido extra */
        background-color: #000;
        /* Fondo negro para áreas vacías */
        border-radius: 8px;
        /* Opcional: Bordes redondeados */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        /* Sombra opcional */
    }

    #carouselExample img {
        height: 100%;
        /* Ajusta la altura de la imagen al 100% del contenedor */
        width: 100%;
        /* Ajusta el ancho de la imagen al 100% del contenedor */
        object-fit: cover;
        /* Escala y recorta la imagen si es necesario */
        object-position: center;
        /* Centra la imagen en el contenedor */
        display: block;
    }


    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
        /* Cambia el color de las flechas a blanco */
    }
</style>
