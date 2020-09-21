@extends('layouts.app')

@section('content')
   <div class="container">

      <h1>Ver Publicaciones</h1>

         <label for="POSTTEXTO">Publicación: </label>
         <input type="text" name="POSTTEXTO" id="POSTTEXTO" value="{{ $publicacion->POSTTEXTO }}"readonly>
         <br>

         <label for="POSTFECHAPUBLICACION">Fecha de publicación: </label>
         <input type="datetime-local" name="POSTFECHAPUBLICACION" id="POSTFECHAPUBLICACION"value="{{ $publicacion->POSTFECHAPUBLICACION }}"readonly>
         <br>

         <label for="POSTCOMENTARIOS">Comentarios: </label>
         <input type="checkbox" name="POSTCOMENTARIOS" id="POSTCOMENTARIOS" {{ ($publicacion->POSTCOMENTARIOS == 1)? "checked":"" }} disabled>
         <br>

         <label for="POSTADVERTENCIA">¡Advertencia!: </label>
         <input type="text" name="POSTADVERTENCIA" id="POSTADVERTENCIA"value="{{ $publicacion->POSTADVERTENCIA }}"readonly>
         <br>

         <label for="POSTFECHAENTREGA">Fecha de entrega: </label>
         <input type="datetime-local" name="POSTFECHAENTREGA" id="POSTFECHAENTREGA"value="{{ $publicacion->POSTFECHAENTREGA }}"readonly>
         <br>

      <p>
         <a href="/publicaciones" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar a la lista de Publicaciones</a>
    </p>

    </div>
@endsection