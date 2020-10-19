@extends('layouts.app')

@section('content')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1>Editar Publicaciones</h1>

        <form method="POST" action="/publicaciones/update/{{ $publicacion->POSTID }}">
        @csrf

            <label for="POSTTEXTO">Publicación: </label>
            <input type="text" name="POSTTEXTO" id="POSTTEXTO" value="{{ $publicacion->POSTTEXTO }}">
            <br>

            <label for="POSTFECHAPUBLICACION">Fecha de publicación: </label>
            <input type="datetime-local" name="POSTFECHAPUBLICACION" id="POSTFECHAPUBLICACION"value="{{ $publicacion->POSTFECHAPUBLICACION }}" readonly>
            <br>

            <label for="POSTCOMENTARIO">Comentarios: </label>
            <input type="checkbox" name="POSTCOMENTARIO" id="POSTCOMENTARIO" value="{{ $publicacion->POSTCOMENTARIOS }}" {{ old('type', $publicacion->POSTCOMENTARIOS) === 1 ? 'checked' : '' }}>
            <br>

            <label for="POSTADVERTENCIA">¡Advertencia!: </label>
            <input type="text" name="POSTADVERTENCIA" id="POSTADVERTENCIA"value="{{ $publicacion->POSTADVERTENCIA }}">
            <br>

            <label for="POSTFECHAENTREGA">Fecha de entrega: </label>
            <input type="datetime" name="POSTFECHAENTREGA" id="POSTFECHAENTREGA" value="{{ $publicacion->POSTFECHAENTREGA }}">
            <br>

            <button type="submit">Editar Publicación</button>
            
        </form>

        <p>
        <a href="/grupos/show/{{ session('id-grupo') }}" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar</a>
            
        </p>
    </div>

@endsection
