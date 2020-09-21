@extends('layouts.app')

@section('content')
   <div class="container">

      <h1>Ver Publicaciones por Usuarios</h1>

         @foreach ($publicaciones_x_usuarios as $pub)
            <label for="PXUSUSUARIO">ID Publicación: </label>
            <input type="text" name="PXUSUSUARIO" id="PXUSUSUARIO" value="{{ $pub->POSTID }}"readonly>
            <br>

            <label for="PXUSUSUARIO">ID Usuario: </label>
            <input type="text" name="PXUSUSUARIO" id="PXUSUSUARIO" value="{{ $pub->USERID }}"readonly>
            <br>

            <label for="PXUSCOMENTARIO">Comentario: </label>
            <input type="text" name="PXUSCOMENTARIO" id="PXUSCOMENTARIO" value="{{ $pub->PXUSCOMENTARIO }}"readonly>
            <br>

            <label for="PXUSAVANCE">Avance: </label>
            <input type="number" name="PXUSAVANCE" id="PXUSAVANCE" value="{{ $pub->PXUSAVANCE }}"readonly>
            <br>

            <label for="PXUSCALIFICACION">Calificación: </label>
            <input type="number" name="PXUSCALIFICACION" id="PXUSCALIFICACION"value="{{ $pub->PXUSCALIFICACION }}"readonly>
         @endforeach

      <p>
         <a href="/publicaciones_x_usuario" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar a la lista de Publicaciones_x_Usuario</a>
    </p>

    </div>
@endsection