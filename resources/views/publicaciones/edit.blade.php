@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Publicaciones</h1>

        <form method="POST" action="/publicaciones/update/{{ $publicacion->POSTID }}">
        @csrf

            <label for="POSTTEXTO">Publicación: </label>
            <input type="text" name="POSTTEXTO" id="POSTTEXTO" value="{{ $publicacion->POSTTEXTO }}">
            <br>

            <label for="POSTFECHAPUBLICACION">Fecha de publicación: </label>
            <input type="datetime-local" name="POSTFECHAPUBLICACION" id="POSTFECHAPUBLICACION"value="{{ $publicacion->POSTFECHAPUBLICACION }}" readonly>
            <br>

            <label for="POSTCOMENTARIOS">Comentarios: </label>
            <input type="checkbox" name="POSTCOMENTARIOS" id="POSTCOMENTARIOS"value="{{ $publicacion->POSTCOMENTARIOS }}">
            <br>

            <label for="POSTADVERTENCIA">¡Advertencia!: </label>
            <input type="text" name="POSTADVERTENCIA" id="POSTADVERTENCIA"value="{{ $publicacion->POSTADVERTENCIA }}">
            <br>

            <label for="POSTFECHAENTREGA">Fecha de entrega: </label>
            <input type="date" name="POSTFECHAENTREGA" id="POSTFECHAENTREGA"value="{{ $publicacion->POSTFECHAENTREGA }}">
            <br>

            <button type="submit">Editar Publicación</button>
            
        </form>

        <p>
        <a href="/publicaciones" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar a la lista de Publicaciones</a>
            
        </p>
    </div>

@endsection
