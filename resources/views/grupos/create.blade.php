@extends('layouts.app')

@section('content')

   <div id="content" class="p-4 p-md-5 pt-5">
      <h1>Crear Grupo</h1>

         <form method="POST" action="/grupos/store" enctype="multipart/form-data">
         @csrf           
            <label for="GRUPONOMBRE">Nombre del grupo: </label>
            <input type="text" name="GRUPONOMBRE" id="GRUPONOMBRE">
            <br>

            <label for="GRUPODESC">Descripción: </label>
            <input type="text" name="GRUPODESC" id="GRUPODESC">
            <br>

            <label for="GRUPOFONDO">Fotografía: </label>
            <input type="file" name="GRUPOFONDO" id="GRUPOFONDO">
            <br>

            <input type="hidden" name="GRUPONUEVO" id="GRUPONUEVO" value="1">
            <input type="hidden" name="GRUPOEXISTENTE" id="GRUPOEXISTENTE" value="0">

            <button type="submit">Crear grupo</button>
         </form>

         <p>
            <a href="/home" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar</a>
         </p>
   </div>


@endsection