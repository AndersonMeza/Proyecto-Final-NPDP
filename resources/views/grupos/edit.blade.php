@extends('layouts.app')

@section('content')   
   
   <div class="container">
      <div class="card">
         <div class="card-header">
            Editar Grupo
         </div>

         <div class="card-body">
            <form method="POST" action="/grupos/update/{{ $grupo->GRUPOID }}" enctype="multipart/form-data">
               @csrf           
               <label for="GRUPONOMBRE">Nombre del grupo: </label>
               <input type="text" name="GRUPONOMBRE" id="GRUPONOMBRE" value="{{ $grupo->GRUPONOMBRE }}">
               <br>

               <label for="GRUPODESC">Descripción: </label>
               <input type="text" name="GRUPODESC" id="GRUPODESC" value="{{ $grupo->GRUPODESC }}">
               <br>

               <label for="GRUPOFONDO">Fotografía: </label>
               <img src="{{ asset('uploads/grupos/'.$grupo->GRUPOFONDO)}}" alt="fotografía_usuario" height="225px" width="200px">
               <br><input type="file" name="GRUPOFONDO" id="GRUPOFONDO">
               <br><br>

               <button type="submit">Editar grupo</button>
            </form>
         </div>

         @if (count($usuarios)>0)
         <div class="card-footer">
            <h5 class="card-title">Solicitudes Pendientes</h5>
            <table class="table table-bordered thead-dark">
               <table-head>
                  <tr>
                     <th>Nombre</th>
                     <th>Email</th>
                     <th>Curso</th>
                     <th>Nivel</th> 
                     <th>Fecha de Nacimiento</th>
                     <th>Aceptar</th>
                     <th>Rechazar</th>
                  </tr>
               </table-head>
               <table-body>
               @foreach ($usuarios as $usuario)
                  <tr>
                     <td>{{ $usuario->name }}</td>
                     <td>{{ $usuario->email }}</td>
                     <td>{{ $usuario->curso }}</td>
                     <td>{{ $usuario->nivel }}</td>
                     <td>{{ $usuario->nacimiento }}</td>
                     <td><a href="/grupos/check/{{ $usuario->id }}/1"><i class="las la-check"></i></a></td>
                     <td><a href="/grupos/check/{{ $usuario->id }}/2"><i class="las la-times"></i></a></td>
                  </tr>
               @endforeach
               </table-body>
            </table>
         </div>
         @endif

      </div>
      <p>
         <a href="/grupos/show/{{ session('id-grupo') }}" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar</a>
      </p>
   </div>

@endsection