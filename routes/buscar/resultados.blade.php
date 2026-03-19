<h2>Resultados para: {{ $texto }}</h2>

<h3>Libros</h3>
@foreach($libros as $libro)
    <p>{{ $libro->titulo }} - {{ $libro->autor }}</p>
@endforeach

<h3>Usuarios</h3>
@foreach($usuarios as $usuario)
    <p>{{ $usuario->name }}</p>
@endforeach