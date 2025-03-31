<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <div class="custom-page-container">
        <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
        <style id="css">
            
        </style>
</head>

<body>
    <div id="navbar" class="navbar">
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
            <div id="mainContent" class="R2L" style="text-align: left; width: 500px; margin-left: 5vw; margin-top: 50px;">
            </div>
        </div>
    </div>
    <script>
        var stylesURL = "https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/main/styles.css?nocache=" + new Date().getTime();
        fetch(stylesURL)
            .then(response => response.text())
            .then(stylesData => {
                document.getElementById("css").innerHTML += stylesData;
            })
        var contentURL = "https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/main/testContent.php?nocache=" + new Date().getTime();
        fetch(contentURL)
            .then(response => response.text())
            .then(contentData => {
                document.getElementById("mainContent").innerHTML += contentData;
            })
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
</body>

</html>