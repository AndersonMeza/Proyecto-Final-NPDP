@extends('layouts.app')

@section('content')

<div class="container">
   <a href="/publicaciones/create" class="badge badge-primary" style="padding:15px; margin:15px auto">
      <i class="las la-plus-circle"></i> Añadir
   </a>
   <table class="table table-bordered table-striped">
      <table-head>
         <tr>
            <th scope="col">id</th>
            <th>Texto</th>
            <th>Fecha Publicación</th>  
            <th>Comentarios</th>
            <th>Advertencia </th>
            <th>Fecha Entrega </th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>         
         </tr>
      </table-head>
      <table-body>
      @foreach ($publicaciones as $publicacion)
         <tr>
            <td>{{ $publicacion->POSTID }}</td>
            <td>{{ $publicacion->POSTTEXTO }}</td>
            <td>{{ $publicacion->POSTFECHAPUBLICACION }}</td>
            <td>{{$publicacion->POSTCOMENTARIOS }}</td>
            <td>{{$publicacion->POSTADVERTENCIA }}</td>
            <td>{{$publicacion->POSTFECHAENTREGA}}</td>
           
            <td><a href="/publicaciones/show/{{ $publicacion->POSTID }}"><i class="las la-search"></i></a></td>
            <td><a href="/publicaciones/edit/{{ $publicacion->POSTID}}"><i class="las la-pen-alt"></i></a></td>
            <td><a href="/publicaciones/destroy/{{$publicacion->POSTID}}"><i class="lar la-trash-alt"></i></a></td>
         </tr>
      @endforeach
      </table-body>
   </table>
</div>
@endsection