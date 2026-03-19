<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Biblioteca de Artículos') }}</title>

    @vite(['resources/css/app.css', 'resources/css/diseno.css', 'resources/js/app.js'])
</head>

<body>


    <div id="pantalla-carga">
        <div class="book">
            <div class="book__pg-shadow"></div>
            <div class="book__pg"></div>
            <div class="book__pg book__pg--2"></div>
            <div class="book__pg book__pg--3"></div>
            <div class="book__pg book__pg--4"></div>
            <div class="book__pg book__pg--5"></div>
        </div>
        

        <h1 class="texto-cargando">Cargando<span class="dot1">.</span><span class="dot2">.</span><span class="dot3">.</span></h1>
    </div>

 feature/buscador
    <form>
    <input type="text" placeholder="Buscar libros, usuarios..." />
    <button type="submit">Buscar</button>
</form>
<form style="display:flex; gap:10px;">
    <input type="text" placeholder="Buscar..." style="padding:8px; width:250px;">
    <button type="submit" style="padding:8px;">🔍</button>
</form>
    <!-- Agregar cualquier script JS que sea necesario -->
    
=======
 main

 main
=======
  <div class="contenido">
        <form action="#" method="get" class="formulario-resena">

<!-- trabajo mich  -->
<button class="Boton_editar" type="button">editar</button>


 main
<!-- de aqui para abajo no se mueve  -->

    <button class="boton_subir" >subir</button>


        <!-- trabajo mich  -->

<button class="Boton_editar" type="button">editar</button>

<!-- trabajo miguel   -->
<button class="Boton_eliminar" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
    </svg>
    <span>ELIMINAR</span>
</button>
    <button class="boton_subir" >subir</button>
            <div class="caja-texto">
                <label for="opinion">Escribe tu reseña:</label>
                <br>
                <textarea id="opinion" name="opinion" rows="4" cols="50" placeholder="¿Qué te pareció el artículo?"></textarea>
            </div>
            <div class="rating">
                <input value="5" name="rate" id="star5" type="radio">
                <label title="text" for="star5"></label>
                <input value="4" name="rate" id="star4" type="radio">
                <label title="text" for="star4"></label>
                <input value="3" name="rate" id="star3" type="radio">
                <label title="text" for="star3"></label>
                <input value="2" name="rate" id="star2" type="radio">
                <label title="text" for="star2"></label>
                <input value="1" name="rate" id="star1" type="radio">
                <label title="text" for="star1"></label>
            </div>

            <br>
            <button type="submit" class="btn-enviar">enviar reseña </button>

        </form>
    </div>



  
    <script>
        // Esto espera a que tu página termine de cargar
        window.addEventListener('load', function() {
            const pantallaCarga = document.getElementById('pantalla-carga');

            // Le damos 2 segundos (2000 milisegundos) para que el usuario alcance a ver el libro
            setTimeout(() => {
                pantallaCarga.classList.add('oculto'); // Le pone la clase para desaparecer
            }, 2000);
        });
    </script>
</body>

</html>