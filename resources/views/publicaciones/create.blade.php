@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Publicaciones</h1>

        <form method="POST" action="/publicaciones/store">
        @csrf
        
            <label for="POSTTEXTO">Imagen</label>
            <input type="file" name="POSTTEXTO" id="POSTTEXTO">
            <br>

            <label for="POSTTEXTO">Publicación</label>
            <input type="text" name="POSTTEXTO" id="POSTTEXTO">
            <br>

            <label for="POSTADVERTENCIA">¡Advertencia!: </label>
            <input type="text" name="POSTADVERTENCIA" id="POSTADVERTENCIA">
            <br>

            <label for="POSTFECHAENTREGA">Fecha de entrega: </label>
            <input type="date" name="POSTFECHAENTREGA" id="POSTFECHAENTREGA">
            <br>

            <button type="submit">Crear Publicación</button>
            
        </form>

        <p>
            <a
            href="/publicaciones" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar a la lista de Publicaciones</a>
            
        </p>
    </div>

@endsection
