@extends('layouts.app')

@section('content')

<div class="container">
   <a href="/usuarios/create" class="badge badge-primary" style="padding:15px; margin:15px auto">
      <i class="las la-plus-circle"></i> Añadir
   </a>
   <table class="table table-bordered table-striped">
      <table-head>
         <tr>
            <th scope="col">id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Curso</th>
            <th>Nivel</th> 
            <th>Fecha de Nacimiento</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
         </tr>
      </table-head>
      <table-body>
      @foreach ($usuarios as $usuario)
         <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->USERNOMBRE }}</td>
            <td>{{ $usuario->USEREMAIL }}</td>
            <td>{{ $usuario->USERCURSO }}</td>
            <td>{{ $usuario->USERNIVEL }}</td>
            <td>{{ $usuario->USERFECHANACIMIENTO }}</td>
            <td><a href="/usuarios/show/{{ $usuario->USERID }}"><i class="las la-search"></i></a></td>
            <td><a href="/usuarios/edit/{{ $usuario->USERID }}"><i class="las la-pen-alt"></i></a></td>
            <td><a href="/usuarios/destroy/{{ $usuario->USERID }}"><i class="lar la-trash-alt"></i></a></td>
         </tr>
      @endforeach
      </table-body>
   </table>
</div>

@endsection