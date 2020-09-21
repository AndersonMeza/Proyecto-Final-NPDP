@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Publicación x Usuario</h1>

        @foreach ($publicaciones_x_usuarios as $pub)
        <form method="POST" action="/publicaciones_x_usuario/update/{{ $pub->POSTID }}/{{ $pub->USERID }}">
        @csrf

            <label for="PXUSUSUARIO">ID Publicación: </label>
            <input type="text" name="PXUSUSUARIO" id="PXUSUSUARIO" value="{{ $pub->POSTID }}"readonly>
            <br>

            <label for="PXUSUSUARIO">ID Usuario: </label>
            <input type="text" name="PXUSUSUARIO" id="PXUSUSUARIO" value="{{ $pub->USERID }}"readonly>
            <br>

            <label for="PXUSCOMENTARIO">Comentario: </label>
            <input type="text" name="PXUSCOMENTARIO" id="PXUSCOMENTARIO" value="{{ $pub->PXUSCOMENTARIO }}">
            <br>

            <label for="PXUSAVANCE">Avance: </label>
            <input type="number" name="PXUSAVANCE" id="PXUSAVANCE" value="{{ $pub->PXUSAVANCE }}">
            <br>

            <label for="PXUSCALIFICACION">Calificación: </label>
            <input type="number" name="PXUSCALIFICACION" id="PXUSCALIFICACION"value="{{ $pub->PXUSCALIFICACION }}">         
            <br>

            <button type="submit">Editar Publicación x Usuario</button>
        </form>
        @endforeach
        <p>
        <a href="/publicaciones_x_usuario" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar a la lista de Publicaciones_x_usuario</a>
            
        </p>
    </div>

@endsection
