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
                background: linear-gradient(to top, rgba(228, 240, 235, 1) 0%, rgba(228, 240, 235, 0) 20%),
                    url(https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/ee5.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                opacity: 0.7 !important;
                z-index: 0 !important;
                display: block !important;
            }

            /*linear-gradient(to bottom, rgba(228, 240, 235, 1) 0%, rgba(228, 240, 235, 0) 20%),*/


            .navbar {
                width: 100%;
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
                height: 75px;
                padding-top: 25px;
            }

            .menu .logo {
                position: relative;
                display: inline-block;
                height: 75px;
                padding-top: 0;
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
                width: 400px;
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
                background-color: #202020;
                max-width: 90%;
                height: 200%;
                z-index: 1;
                margin-top: 3vw;
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
<div class="navbar">
        <ul class="menu">
            <li class="logo"> <a href="https://vincular.org.ar"><img class="HDN"
                        src="https://vincular.org.ar/wp-content/uploads/2024/10/logo-3.png" style="height: 75px;"></a>
            </li>
            <li><a class="und D2U" href="https://vincular.org.ar/quienes-somos-3/">¿Quiénes somos?</a></li>
            <li>
                <a class="und D2U" href="https://vincular.org.ar/nuestra-tarea/">Nuestra tarea ▾</a>
                <ul class="dropdown">
                    <li><a class="und" href="https://vincular.org.ar/nuestros-proyectos/">Nuestros Proyectos</a>
                    </li>
                    <li><a class="und" href="https://vincular.org.ar/formacion-y-asistencia-tecnica/">Formacion y Asistencia Técnica</a></li>
                    <li><a class="und" href="https://vincular.org.ar/red-solidaria-vincularnos/">Red Solidaria "Vincularnos"</a></li>
                </ul>
            </li>
            <li><a class="und D2U" href="https://vincular.org.ar/contactanos/">Contáctanos</a></li>
            <li><a class="und D2U" href="https://vincular.org.ar/participar/">Participar</a></li>
            <li><a class="und D2U" href="https://vincular.org.ar/galeria-de-fotos/">Galería</a></li>
        </ul>
    </div>
    <div class="has-bg-img">
        <div class="content">
            <div class="R2L" style="text-align: center; width: 1000px; margin-top: 50px;">
                <center><img src="https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/eeicon.jpg" alt="" style="height:100px;"></center><br><br>
                <p style="color: white; font-size:30px; margin-left:50px; margin-right:50px; text-align: left" id="info1"></p><br><br>
                <img src="https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/ee1.jpg" alt="" style="width:45%; height:250px; object-fit:cover; display:inline-block">
                <img src="https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/ee2.jpg" alt="" style="width:45%; height:250px; object-fit:cover; display:inline-block"><br>
                <p style="color: white; font-size:30px; margin-left:50px; margin-right:50px; text-align: right" id="info2"></p><br>
                <img src="https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/ee3.jpg" alt="" style="width:45%; height:250px; object-fit:cover; display:inline-block">
                <img src="https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/ee4.jpg" alt="" style="width:45%; height:250px; object-fit:cover; display:inline-block"><br>
                <p style="color: white; font-size:30px; margin-left:50px; margin-right:50px; text-align: left" id="info3"></p><br>
                <img src="https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/ee5.jpg" alt="" style="width:45%; height:250px; object-fit:cover; display:inline-block">
                <img src="https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/img/ee6.jpg" alt="" style="width:45%; height:250px; object-fit:cover; display:inline-block">
                <br>
                <br>
            </div>
        </div>
    </div>
    <script>
        fetch("https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/content/espaciosExtraordinarios.txt?nocache=" + new Date().getTime())
     .then(response => response.text())
    .then(data => {
        // Buscar todas las coincidencias con etiquetas personalizadas (/ini#clave ... /end)
        let matches = [...data.matchAll(/\/ini#(\w+)\s(.*?)\/end/gs)];

        if (matches.length > 0) {
            matches.forEach(match => {
                let clave = match[1]; // Nombre del identificador (ej. "titulo")
                let contenido = match[2].trim(); // Contenido dentro del bloque
                
                // Insertar contenido en el elemento correspondiente si existe
                let elemento = document.getElementById(clave);
                if (elemento) {
                    elemento.innerHTML = contenido;
                }
            });
        }else{
            document.getElementById("error").innerHTML="<h1>Error de carga ☹</h1> <br><h3>Por favor recague la página presionando el boton ⟳ o la tecla F5.<br>Si el error persiste, intente de nuevo más tarde.</h3><br><br>";
        }
    })
    .catch(error => console.error("Error de carga. <br>Porfavor recague la página presionando el boton ⟳ o la tecla F5.<br>Si el error persiste, intente de nuevo más tarde:", error));
        document.addEventListener("DOMContentLoaded", function() {
            let elements = document.querySelectorAll(".D2U");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("D2Uv");
                    }
                });
            }, {
                threshold: 0.5
            });
            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function() {
            let elements = document.querySelectorAll(".U2D");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("U2Dv");
                    }
                });
            }, {
                threshold: 0.5
            });
            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function() {
            let elements = document.querySelectorAll(".R2L");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("R2Lv");
                    }
                });
            }, {
                threshold: 0.5
            });

            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function() {
            let elements = document.querySelectorAll(".L2R");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("L2Rv");
                    }
                });
            }, {
                threshold: 0.5
            });

            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener("DOMContentLoaded", function() {
            let elements = document.querySelectorAll(".HDN");
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("VSBL");
                    }
                });
            }, {
                threshold: 0.7
            });

            elements.forEach(element => observer.observe(element));
        });
    </script>
    </div>
</body>

</html>