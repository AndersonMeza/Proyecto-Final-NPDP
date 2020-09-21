@extends('layouts.app')

@section('content')
<div class="container">

   <h1>Crear Grupos</h1>
            
         <label for="GRUPONOMBRE">Nombre del grupo: </label>
         <input type="text" name="GRUPONOMBRE" id="GRUPONOMBRE"value="{{ $grupo->GRUPONOMBRE }}" readonly>
         <br>

         @if ($grupo->GRUPONUEVO == 1) 
            <label for="GRUPONUEVO">Es un grupo nuevo.</label>
         @else
            <label for="GRUPOEXISTENTE">El grupo ya existe!</label>
         @endif
         <br>

      </form>

      <p>
         <a href="/grupos" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar a la lista de Grupos</a>
      </p>
</div>
@endsection