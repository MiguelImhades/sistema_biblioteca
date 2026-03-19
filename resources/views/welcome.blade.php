<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Biblioteca de Artículos') }}</title>

    @vite(['resources/css/app.css', 'resources/css/diseno.css', 'resources/js/app.js'])
</head>

<body>

<div class="contenedor-busqueda">
    <form action="#" method="GET" class="formulario-busqueda">
        <input type="text" placeholder="Buscar libros o usuarios..." name="q">
        <button type="submit">🔍</button>
    </form>
</div>
 <div class="contenido">
        <article class="card">
            
            <div class="card-image">
                <div class="placeholder-image">
                    <span class="ai-logo">AI</span>
                </div>
            </div>

<form action="" method="GET" class="formulario-resena">

    @csrf

</form>
                <div class="card-header-internal">
                    <div>
                        <h2 class="card-title-text">Título del Artículo</h2>
                        <p class="card-author-text">Por: Autor del Proyecto</p>
                    </div>
                    <span class="badge">NUEVO</span>
                </div>

                <p class="card-description-text">
                    Esta es una breve descripción del artículo que estás reseñando. 
                    Puedes usar este espacio para mostrar un resumen automático.
                </p>

                <div class="caja-texto">
                    <textarea id="opinion" name="opinion" rows="3" placeholder="¿Qué te pareció el artículo?"></textarea>
                </div>

                <div class="rating-container">
                    <span class="rating-text">Tu calificación:</span>
                    <div class="rating">
                        <input value="5" name="rate" id="star5" type="radio">
                        <label title="5 estrellas" for="star5"></label>
                        <input value="4" name="rate" id="star4" type="radio">
                        <label title="4 estrellas" for="star4"></label>
                        <input value="3" name="rate" id="star3" type="radio">
                        <label title="3 estrellas" for="star3"></label>
                        <input value="2" name="rate" id="star2" type="radio">
                        <label title="2 estrellas" for="star2"></label>
                        <input value="1" name="rate" id="star1" type="radio">
                        <label title="1 estrella" for="star1"></label>
                    </div>
                </div>

                <footer class="card-footer">
                    <button type="submit" class="boton_subir">Enviar Reseña</button>
                    <button type="submit" class="boton_subir">leer</button>

                    <div class="action-icons">
                        <button type="button" class="icon-btn Boton_editar" title="Editar">
                            ✏️
                        </button>
                        
                        <button type="button" class="icon-btn delete-btn Boton_eliminar" title="Eliminar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </div>
                </footer>
            </form>
        </article>
    </div>s
    <script>

    </script>
</body>

</html>