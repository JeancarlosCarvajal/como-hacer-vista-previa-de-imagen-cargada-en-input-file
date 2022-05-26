<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vista Previa de Imagen en Input File</title>
 
        <style> 
            body {
                text-align: center;
                margin-top: 850px;
            }
            /* Primero creamos la clase imagen para asignarle el
            fondo */
            .imagen {
                /* Eliminamos la informacion que trae por defecto */
                content-visibility: hidden;
                /* Colocamos de fondo una imagen inicial con alguna
                informacion sobre la imagen que se debe cargar */
                background-image: url(img/otros/cargar-600-314.svg);
                /* Centramos el fondo de la imagenn */
                background-position: center;
                /* Asignamos un alto inicial al área del fondo */
                height: 314px;
                /* Asignamos un ancho inicial al área del fondo */
                width: 600px;
                /* Opcional asignamos un color al fondo para identific-
                ar mejor el input */
                background-color: yellow;
                /* Evitamos que la imagen de fondo se repita */
                background-repeat: no-repeat;
                /* Hacemos que la imagen ocupe todo el ancho del input */
                background-size: contain;
            }
            .imagen:hover{
                cursor: pointer;
            }
        </style>

    </head> 

    <body>    
        <input type="file" class="imagen" id="imagen">
    </body>

    <script>
        // Procesa la imagen 
        document.getElementById('imagen').addEventListener('click', 
            function(e) {
            // Lee el input imagen
            const input_imagen = document.getElementById('imagen');
            //Leemos el evento de cambio
            input_imagen.onchange = function(e) {
                // Crea el lector
                var reader = new FileReader();
                // Detecta el evento una vez cargado los datos
                reader.onloadend = function() { 
                // Asignamos la base64 como src del input file 
                e.target.style.backgroundImage = 'url('+this.result+')';
                }
                // Lee los datos en forma de DataURL base 64
                reader.readAsDataURL(input_imagen.files[0]); 
            }
        });
    </script>

</html>
