@extends('layouts.app')

@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <h1>Editar Comentario</h1>

    <form method="POST" action="/publicaciones_x_usuario/update/{{ $pub->id }}">
    @csrf
        <label for="PXUSCOMENTARIO">Comentario: </label>
        <input type="text" name="PXUSCOMENTARIO" id="PXUSCOMENTARIO" value="{{ $pub->PXUSCOMENTARIO }}">
        <br>

        <label for="PXUSAVANCE">Avance: </label>
        <input type="number" name="PXUSAVANCE" id="PXUSAVANCE" min="0" max="10" value="{{ $pub->PXUSAVANCE }}">
        <br>

        <label for="PXUSCALIFICACION">Calificación: </label>
        <input type="number" name="PXUSCALIFICACION" id="PXUSCALIFICACION" min="0" max="5" value="{{ $pub->PXUSCALIFICACION }}">         
        <br>

        <button type="submit">Editar Comentario</button>
    </form>

    <p>
        <a href="/grupos/show/{{ session('id-grupo') }}" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar</a>   
    </p>
</div>
@endsection
