<h1 id="titulo1"></h1><br><br>
<p id="contenido1"></p>
<script>
    fetch("https://raw.githubusercontent.com/sdmatayoshi/Vincular-Pensarme_un_Futuro/refs/heads/main/content/formacionAsistencia.txt?nocache=" + new Date().getTime())
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
                            } else {
                                document.getElementById("error").innerHTML = "<h1>Error de carga ☹</h1> <br><h3>Por favor recague la página presionando el boton ⟳ o la tecla F5.<br>Si el error persiste, intente de nuevo más tarde.</h3><br><br>";
                            }
                        })
                        .catch(error => console.error("Error de carga. No se pudieron obtener los datos.", error));
</script>