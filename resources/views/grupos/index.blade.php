@extends('layouts.app')

@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
   <table class="table table-bordered thead-dark">
      <table-head>
         <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Administrador</th>  
            <th>Unirte</th>       
         </tr>
      </table-head>
      <table-body>
      @foreach ($grupos as $grupo)
         <tr>
            <td>{{ $grupo->GRUPONOMBRE }}</td>
            <td>{{ $grupo->GRUPODESC }}</td>
            <td>{{ $grupo->admin }}</td>
            <td><a href="/grupos/join/{{ $grupo->GRUPOID }}/{{ Auth::user()->id }}">Unirse</a></td>
         </tr>
      @endforeach
      </table-body>
   </table>

   <p>
      <a href="/home" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar</a>
   </p>
</div>
@endsection
