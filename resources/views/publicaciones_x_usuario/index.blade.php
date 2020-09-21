@extends('layouts.app')

@section('content')

<div class="container">
   <a href="/publicaciones_x_usuario/create" class="badge badge-primary" style="padding:15px; margin:15px auto">
      <i class="las la-plus-circle"></i> Añadir
   </a>
   <table class="table table-bordered table-striped">
      <table-head>
         <tr>
            <th>ID Publicación</th>
            <th>ID Usuario</th>
            <th>Comentario por Usuario</th>  
            <th>Avance</th>
            <th>Calificación</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>         
         </tr>
      </table-head>
      <table-body>
      @foreach ($publicaciones_x_usuarios as $publicacion)
         <tr>
            <td>{{ $publicacion->POSTID }}</td>
            <td>{{ $publicacion->USERID }}</td>
            <td>{{ $publicacion->PXUSCOMENTARIO }}</td>
            <td>{{ $publicacion->PXUSAVANCE }}</td>
            <td>{{ $publicacion->PXUSCALIFICACION}}</td>         
            <td><a href="/publicaciones_x_usuario/show/{{ $publicacion->POSTID }}/{{ $publicacion->USERID }}"><i class="las la-search"></i></a></td>
            <td><a href="/publicaciones_x_usuario/edit/{{ $publicacion->POSTID }}/{{ $publicacion->USERID }}"><i class="las la-pen-alt"></i></a></td>
            <td><a href="/publicaciones_x_usuario/destroy/{{ $publicacion->POSTID }}/{{ $publicacion->USERID }}"><i class="lar la-trash-alt"></i></a></td>
         </tr>
      @endforeach
      </table-body>
   </table>
</div>
@endsection