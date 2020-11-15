@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
         
            <div class="card-header"> <i class="las la-user-friends"></i>{{ __('Crear Grupo') }} </div>            
                <div class="card-body">
  
      
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
            <input type="hidden" name="GRUPOEXISTENTE" id="GRUPOEXISTENTE" value="0"><br>

            <button class="formaboton" type="submit"> Crear grupo  </button>
         </form>

         <p>
            <a href="/home" class="badge badge-primary" style="padding:13px; margin:30px; margin-left:380px"> Regresar
            </a>
         </p>
   </div>
   </div>

   </div>



@endsection