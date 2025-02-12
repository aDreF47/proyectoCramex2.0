<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nosotros</title>

</head>

<body>
    <x-nav-bar />

    <div id="globalContent">
        <section id="Indice Nosotros" class="IndiceNosotros">
            <h1>Nosotros</h1>
            <article id="quienesSomos">
                <h2>¿Quienes somos?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tristique nisi, vitae ultrices
                    neque. Donec vel justo id nunc condimentum tempus. Sed auctor, felis vel efficitur ullamcorper,
                    ipsum neque semper velit, et tempor felis metus vel velit.</p>
                <ul>
                    <li id="PropuestaEducativa">Propuesta educativa</li>
                    <li id="MisiónyVisión">Misión y Visión</li>
                    <li id="Objetivos">Objetivos</li>
                    <li id="PalabrasDeldirector">Palabras del director</li>
                    <li id="HimnoDeLaInstitución">Himno de la institución</li>
                    <li id="InsigniaDeCramex">Insignia de Cramex</li>
                </ul>

            </article>
            <article id="programaTalentos">
                <h2>Programa Talentos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tristique nisi, vitae ultrices
                    neque. Donec vel justo id nunc condimentum tempus. Sed auctor, felis vel efficitur ullamcorper,
                    ipsum neque semper velit, et tempor felis metus vel velit.</p>
                <ul>
                    <li id="Deportes">Deportes</li>
                    <li id="SeleccionyOlimpiadas">Seleccion y Olimpiadas</li>
                    <li id="PrimerosPuestos">Primeros Puestos</li>
                </ul>

            </article>
            <article id="Novedades">
                <h2>Novedades</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tristique nisi, vitae ultrices
                    neque. Donec vel justo id nunc condimentum tempus. Sed auctor, felis vel efficitur ullamcorper,
                    ipsum neque semper velit, et tempor felis metus vel velit.</p>
                <ul>
                    <li id="Revistas">Revistas</li>
                    <li id="Noticias">Noticias</li>
                    <li id="GaleriaDeFotos">Galeria de Fotos</li>
                    <li id="GaleriaDeVideos">Galeria de Videos</li>
                    <li id="RedesSociales">Redes Sociales</li>
                </ul>

            </article>
        </section>

    </div>




    </div>
</body>
<style>
    #globalContent {
        margin-top: 30px;
        padding: 20px;
        background: #a46161;
        display: flex;
        flex-wrap: wrap;
    }

    .IndiceNosotros {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        padding: 20px;
        gap: 20px;
        background: #ffffff;

        h1 {
            width: 100%;
            grid-column: 1 / 4;
        }
    }

    #quienesSomos {

        h2 {
            width: 100%;
        }
    }

    #programaTalentos,
    #Novedades,
    #quienesSomos {
        border-radius: 25px;
        min-height: 390px;
        height: auto;
        justify-content: center;
        display: flex;
        align-items: center;
        flex-direction: column;
        overflow: hidden;
        transition: all 0.3s ease-in-out;

        h2 {
            padding: 20px;
            width: 400px;
            background-color: orange;
            border-radius: 20px;
            text-align: center;
            font-size: 3rem;
            cursor: pointer;
        }

        p {
            padding: 0px 20px !important;
        }



        p,
        ul {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.2s ease-in-out, max-height 0.2s ease-in-out;
        }

        &:hover {
            background-color: #cccaba;
            height: auto;
            transition: all 0.3s ease-in-out;

            h2 {
                transition: 0.2s ease-in-out 0.1s;
                font-size: 2.4rem;
                cursor: pointer;
                background-color: transparent;
            }



            p,
            ul {

                text-align: left;
                align-items: none !important;
                opacity: 1;
                max-height: 500px;
                /* Ajusta según el contenido */
            }
        }

        &:not(:hover) {
            h2 {
                transition: 0.1s ease-in-out 0.1s;
                text-align: center;
                font-size: 2.4rem;
                cursor: pointer;
            }

            p,
            ul {
                opacity: 0;
                max-height: 0;
                transition: opacity 0.3s ease-in-out 0.3s, max-height 0.3s ease-in-out 0.1s;
            }
        }
    }
</style>

</html>
