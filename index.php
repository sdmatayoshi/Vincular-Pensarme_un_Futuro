<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <div class="custom-page-container">
        <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html,
            body {
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
                height: 100% !important;
                overflow-x: hidden;
                /* Evita el desplazamiento horizontal */
                background-color: #e4f0eb;
                font-family: Arial, Helvetica, sans-serif;
            }

            .wp-site-blocks,
            .wp-block-post-content {
                margin: 0 !important;
                padding: 0 !important;
                width: 100vw !important;
            }

            .container,
            .content-area,
            .site-content,
            .site-main {
                margin: 0 !important;
                padding: 0 !important;
                max-width: 100% !important;
            }

            .is-layout-constrained {
                max-width: 100% !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .wp-block,
            .post,
            .page {
                margin: 0 !important;
                padding: 0 !important;
            }

            .entry-title,
            .post-title,
            .page-title {
                display: none !important;
            }

            .page,
            .content-area,
            .site-main,
            .site-content,
            .container {
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }

            .custom-page-container {
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
                max-width: 100% !important;
                box-sizing: border-box !important;
            }

            .has-bg-img {
                position: relative;
                width: 100%;
                min-height: 100vh;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 0;
            }

            .has-bg-img::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                min-height: 100vh;
                background-image: url(https://vincular.org.ar/wp-content/uploads/2024/10/snapedit_1736299645183-1.png);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                opacity: 0.5 !important;
                z-index: 0 !important;
                display: block !important;
            }

            .navbar {
                width: 100%;
                background-color: #e4f0eb;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px 0;
                font-size: 1.5vw;
            }

            .menu {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                gap: 20px;
            }

            .menu li {
                position: relative;
                display: inline-block;
            }

            .menu a {
                text-decoration: none;
                color: #000;
                font-size: 1.5vw;
                padding: 10px 15px;
                display: block;
            }

            /* Estilos del dropdown */
            .dropdown {
                display: block;
                position: absolute;
                background-color: white;
                list-style: none;
                padding: 0;
                top: 100%;
                left: 0;
                width: 200px;
                border-radius: 5px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                max-height: 0;
                /* Oculta el dropdown */
                overflow: hidden;
                transition: max-height 0.3s ease-out;
                z-index: 10;
            }

            /* Cuando el usuario pasa el mouse */
            .menu li:hover>.dropdown {
                max-height: 500px;
                /* Expande el dropdown */
                z-index: 10;
            }


            .dropdown li {
                width: 100%;
                z-index: 10;
            }

            .dropdown a {
                display: block;
                padding: 10px;
                color: #000;
                background-color: white;
                z-index: 10;
            }

            .und:hover {
                text-decoration: underline;
            }

            /* Mostrar el dropdown cuando el usuario pasa el mouse */
            .menu li:hover>.dropdown {
                display: block;
            }

            .slink {
                text-decoration: none;
                color: #000;
            }

            .ybtn {
                background-color: #f7c200;
                position: relative;
                height: 5vw;
                width: 13vw;
                display: flex;
                /* Activa flexbox */
                justify-content: center;
                /* Centra horizontalmente */
                align-items: center;
                /* Centra verticalmente */
                text-align: center;
                /* Asegura que el texto esté alineado */
                font-size: 1.2vw;
                /* Ajusta el tamaño del texto si es necesario */
                font-weight: bold;
                /* Opcional, hace que el texto resalte */
                border-radius: 10px;
                /* Opcional, bordes redondeados */
                z-index: 5;
            }

            .ybtn:hover {
                background-color: #fae56a;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            .fadein {
                animation: fadeIn 2s ease-in-out;
            }

            .content {
                background-color: #e4f0eb;
                max-width: 90%;
                height: 200%;
                display: inline-block;
                z-index: 1;
            }


            .D2U {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 1s ease-out, transform 1s ease-out;
            }

            .D2U.D2Uv {
                opacity: 1;
                transform: translateY(0);
            }

            .U2D {
                opacity: 0;
                transform: translateY(-30px);
                transition: opacity 1s ease-out, transform 1s ease-out;
            }

            .U2D.U2Dv {
                opacity: 1;
                transform: translateY(0);
            }

            .R2L {
                opacity: 0;
                transform: translateX(30px);
                transition: opacity 1s ease-out, transform 1s ease-out;
            }

            .R2L.R2Lv {
                opacity: 1;
                transform: translateX(0);
            }

            .L2R {
                opacity: 0;
                transform: translateX(-30px);
                transition: opacity 1s ease-out, transform 1s ease-out;
            }

            .L2R.L2Rv {
                opacity: 1;
                transform: translateX(0);
            }

            .HDN {
                opacity: 0;
                transition: opacity 1s ease-out, transform 1s ease-out;
            }

            .HDN.VSBL {
                opacity: 1;
            }

            .entry-title,
            .post-title,
            .page-title {
                display: none !important;
            }

            .has-text-align-center, 
            .wp-block-post-title,
            .wp-block-spacer {
                display: none !important;
                height: 0 !important;
                width: 0 !important;
            }
        </style>
</head>

<body>
    <div style="text-align: center;">
        <img class="HDN" src="https://vincular.org.ar/wp-content/uploads/2024/10/logo-3.png" style="width: 50vw;"><br>
        <p class="D2U" style="font-family: 'Architects Daughter';font-size:2.5vw;">Desde 2011 contribuyendo a imaginar
            futuros</p>
    </div>
    <div class="has-bg-img">
        <div class="navbar">
            <ul class="menu">
                <li><a class="und D2U" href="https://vincular.org.ar/quienes-somos/">¿Quiénes somos?</a></li>
                <li>
                    <a class="und D2U" href="https://vincular.org.ar/nuestra-tarea/">Nuestra tarea ▾</a>
                    <ul class="dropdown">
                        <li><a class="und" href="https://vincular.org.ar/nuestros-proyectos/">Nuestros Proyectos</a>
                        </li>
                        <li><a class="und" href="https://vincular.org.ar/formacion-y-asistencia-tecnica/">Formacion y
                                Asistencia Técnica</a></li>
                        <li><a class="und" href="https://vincular.org.ar/red-solidaria-vincularnos/">Red Solidaria
                                "Vincularnos"</a></li>
                    </ul>
                </li>
                <li><a class="und D2U" href="https://vincular.org.ar/contactanos/">Contáctanos</a></li>
                <li><a class="und D2U" href="https://vincular.org.ar/participar/">Participar</a></li>
                <li><a class="und D2U" href="https://vincular.org.ar/galeria-de-fotos/">Galería</a></li>
            </ul>
        </div>
        <br>
        <div>
            <a href="vincular.org.ar/sumate" class="slink">
                <div class="ybtn HDN">Nuestro proyecto 2025, sumate!</div>
            </a>
        </div>
        <div class="content" style="margin-top: 3vw;">
            <div class="R2L" style="text-align: left; width: 75%; margin-left: 3vw; margin-top: 50px;">
                <h1>Un poco sobre nosotros</h1><br><br>
                <h2>¿Qué es Vincular-Pensarme un Futuro?</h2>
                <p style="font-size: 1.5vw;">
                    Vincular-Pensarme un Futuro es una Asociación Civil sin fines de lucro,
                    fundada en 2011, que trabaja en la promoción de derechos y la construcción de ciudadanía junto a
                    niños,
                    niñas y adolescentes.
                    Nuestra misión se enfoca en diseñar e implementar proyectos sociales, educativos y culturales,
                    especialmente en territorios con alta vulnerabilidad social,
                    con el objetivo de generar un impacto positivo en el desarrollo humano.</p>
            </div>
            <br>
            <div class="info" style="display: flex; justify-content: space-between;">
                <div style="width: 50%;" class="R2L">
                    <h2>Nuestros Focos</h2>
                    <div style="display: flex; gap: 20px; margin-left: 1vw; margin-right: 1vw;">
                        <div style="width: 33%; background-color: #f7cbad; padding: 1vw; border-radius: 5%;">
                            Proyectos educativos integrales: ciencia, arte y expresión
                        </div>
                        <div style="width: 33%; background-color: #f7cbad; padding: 1vw; border-radius: 5%;">
                            Formación y capacitación en el área socioeducativa
                        </div>
                        <div style="width: 33%; background-color: #f7cbad; padding: 1vw; border-radius: 5%;">
                            Tejido de redes con instituciones y actores sociales
                        </div>
                    </div>
                </div>
                <div style="width: 50%;" class="L2R">
                    <h2>¿Cómo sumarte?</h2>
                    <div style="display: flex; gap: 20px; margin-right: 1vw; margin-left: 1vw;">
                        <div style="width: 33%; background-color: #f7cbad; padding: 1vw; border-radius: 5%;">
                            Colaboraciones en diversas tareas de apoyo a los proyectos
                        </div>
                        <div style="width: 33%; background-color: #f7cbad; padding: 1vw; border-radius: 5%;">
                            Donaciones de materiales, libros, mobiliario, etc
                        </div>
                        <div style="width: 33%; background-color: #f7cbad; padding: 1vw; border-radius: 5%;">
                            Contribuciones monetarias para que funcionen los proyectos
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <a href="#"
                style="color: #fff; text-decoration: none; display: flex; justify-content: center; align-items: center;">
                <div
                    style="background-color: #000; width: 100px; height: 25px; display: flex; justify-content: center; align-items: center; border-radius: 5px; overflow: hidden;">
                    <b>ASOCIATE</b>
                </div>
            </a>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let elements = document.querySelectorAll(".D2U");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("D2Uv");
                    }
                });
            }, { threshold: 0.5 });
            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function () {
            let elements = document.querySelectorAll(".U2D");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("U2Dv");
                    }
                });
            }, { threshold: 0.5 });
            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function () {
            let elements = document.querySelectorAll(".R2L");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("R2Lv");
                    }
                });
            }, { threshold: 0.5 });

            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function () {
            let elements = document.querySelectorAll(".L2R");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("L2Rv");
                    }
                });
            }, { threshold: 0.5 });

            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function () {
            let elements = document.querySelectorAll(".HDN");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("VSBL");
                    }
                });
            }, { threshold: 0.7 });

            elements.forEach(element => observer.observe(element));
        });
    </script>
    </div>
</body>

</html>