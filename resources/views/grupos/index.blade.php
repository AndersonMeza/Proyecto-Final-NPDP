@extends('layouts.app')

@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
   <table class="table table-bordered">
      <thead class="tablehead">
         <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Administrador</th>  
            <th>Unirte</th>       
         </tr>
      </thead>
      <tbody>
      @foreach ($grupos as $grupo)
         <tr>
            <td>{{ $grupo->GRUPONOMBRE }}</td>
            <td>{{ $grupo->GRUPODESC }}</td>
            <td>{{ $grupo->admin }}</td>
            <td><a href="/grupos/join/{{ $grupo->GRUPOID }}/{{ Auth::user()->id }}">Unirse</a></td>
         </tr>
      @endforeach
      </tbody>
   </table>

   <p>
      <a href="/home" class="badge badge-primary" style="padding:15px; margin:15px auto">
         <i class="las la-chevron-left"></i> Regresar
      </a>
   </p>
</div>
@endsection
