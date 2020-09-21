@extends('layouts.app')

@section('content')   
   
   <div class="container">
      <h1>Crear Grupos</h1>

         <form method="POST" action="/grupos/update/{{ $grupo->GRUPOID }}">
         @csrf           
            <label for="GRUPONOMBRE">Nombre del grupo: </label>
            <input type="text" name="GRUPONOMBRE" id="GRUPONOMBRE" value="{{ $grupo->GRUPONOMBRE }}">
            <br>

            <label for="GRUPONUEVO">GRUPO NUEVO</label>
            <input type="radio" id="GRUPONUEVO" name="GRUPO" value="NUEVO" {{ ($grupo->GRUPONUEVO == 1)? "checked":"" }}>
            <br>
            
            <label for="GRUPOEXISTENTE">GRUPO EXISTENTE</label>
            <input type="radio" id="GRUPOEXISTENTE" name="GRUPO" value="EXISTENTE" {{ ($grupo->GRUPOEXISTENTE == 1)? "checked":"" }}>
            <br>

            <button type="submit">Editar grupo</button>
         
         </form>

         <p>
            <a href="/grupos" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar a la lista de Grupos</a>
         </p>
   </div>

@endsection