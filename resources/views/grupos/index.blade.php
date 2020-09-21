@extends('layouts.app')

@section('content')

<div class="container">
   <a href="/grupos/create" class="badge badge-primary" style="padding:15px; margin:15px auto">
      <i class="las la-plus-circle"></i> Añadir
   </a>
   <table class="table table-bordered table-striped">
      <table-head>
         <tr>
            <th scope="col">id</th>
            <th>Nombre</th>
            <th>Nuevo Grupo</th>
            <th>Grupo Existente</th>  
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>         
         </tr>
      </table-head>
      <table-body>
      @foreach ($grupos as $grupo)
         <tr>
            <td>{{ $grupo->GRUPOID }}</td>
            <td>{{ $grupo->GRUPONOMBRE }}</td>
            <td>{{ $grupo->GRUPONUEVO }}</td>
            <td>{{ $grupo->GRUPOEXISTENTE }}</td>
            <td><a href="/grupos/show/{{ $grupo->GRUPOID }}"><i class="las la-search"></i></a></td>
            <td><a href="/grupos/edit/{{ $grupo->GRUPOID }}"><i class="las la-pen-alt"></i></a></td>
            <td><a href="/grupos/destroy/{{$grupo->GRUPOID }}"><i class="lar la-trash-alt"></i></a></td>
         </tr>
      @endforeach
      </table-body>
   </table>
</div>
@endsection
