@extends('layouts.app')

@section('title', 'Crear Grupo')

@section('content')

   <div class="container">
      <h1>Crear Grupos</h1>

         <form method="POST" action="/grupos/store">
         @csrf           
            <label for="GRUPONOMBRE">Nombre del grupo: </label>
            <input type="text" name="GRUPONOMBRE" id="GRUPONOMBRE">
            <br>

            <label for="GRUPONUEVO">¿Es un grupo nuevo? </label>
            <input type="radio" name="GRUPO" id="GRUPONUEVO" value="nuevo">
            <br>

            <label for="GRUPOEXISTENTE">¿El grupo ya existe? </label>
            <input type="radio" name="GRUPO" id="GRUPOEXISTENTE" value="existente">
            <br>

            <button type="submit">Crear grupo</button>
         
         </form>

         <p>
            <a href="/grupos" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar a la lista de usuarios</a>
         </p>
   </div>


@endsection