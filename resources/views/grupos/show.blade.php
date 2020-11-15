@extends('layouts.app')
   
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
   <div class="row">
      <div class="col-sm-9">
         <h2 class="mb-4">{{ $grupo->GRUPONOMBRE }}</h2>
      </div>
      <div class="form-group col-sm-3">
         @if ( Auth::user()->id == session('id-admin') )
            <div>
               <a href="/grupos/edit/{{ $grupo->GRUPOID }}" type="button">Administrar Grupo</a> 
            </div>
         @endif
         <div>
            <a href="/grupos/out/{{ $grupo->GRUPOID }}" type="button">Salir del Grupo</a> 
         </div>
      </div>
   </div>
   <p>{{ $grupo->GRUPODESC }}</p>

   @if (session('flag-pertenece') == true)

      <div class="container" align="center">
         <form action="/publicaciones/search" method="post"> @csrf
            <input type="text" name="busqueda" id="busqueda" class="kinput">
            <button type="submit" class="btn btn-link">Buscar</button>
         </form>
      </div>

      <form action="/publicaciones/store" method="post" enctype="multipart/form-data"> @csrf
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-sm-10">Nueva Publicación</div>
            </div>
         </div>
         <div class="card-body">
            <input type="text" class="form-control kinput" name="POSTTEXTO" id="POSTTEXTO" placeholder="¿Qué tareas tienes para hoy?">
         </div>
         <div class="card-footer">
            <div class="row">
               <div class="col-sm-6 row">
                  <label for="" class="col-sm-5">Fecha de Entrega</label> 
                  <input type="date" class="col-sm-7 form-control" name="POSTFECHAENTREGA" min="{{ date('Y-m-d', strtotime('-12 hours')) }}" required>
               </div>
               <div class="col-sm-6">
                  <input type="file" name="POSTCONTENIDOMULTIMEDIA" id="POSTCONTENIDOMULTIMEDIA" class="form-control"> 
               </div>
            </div>
            <div class="card-footer text-muted">
               <div class="row">
                  <label for="" class="col-sm-2">Avance</label> 
                  <input type="range" class="col-sm-10 form-control-range" name="PXUSAVANCE" id="PXUSAVANCE" min="0" max="10">
               </div>
            </div>
         </div>
         <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary btn-block">Publicar</button>
         </div>
      </div>
      </form>

      @if (count($publicaciones)>0)
         @foreach ($publicaciones as $publicacion)
            <div class="card">
               <div class="card-header">
                  <div class="row">
                     <div class="col-sm-6">{{ $publicacion->autor->name }}</div>
                     @if (( Auth::user()->id == session('id-admin') )  ||  ( Auth::user()->id == $publicacion->autor->id ))
                        <div class="col-sm-6 text-sm-right">
                           <a href="/publicaciones/edit/{{ $publicacion->POSTID}}"><i class="las la-pen-alt"></i></a>
                           <a href="/publicaciones/destroy/{{$publicacion->POSTID}}"><i class="lar la-trash-alt"></i></a>
                        </div>
                     @endif
                  </div>  
               </div>
               <div class="card-body">
                  <p class="card-title">{{ $publicacion->POSTFECHAPUBLICACION }}</p>
                  <h5 class="card-text">{{ $publicacion->POSTTEXTO }}</h5>
               </div>
               <div class="card-footer text-muted">
                  <div class="row">
                     <div class="col-sm-6">
                        @php
                           $calificacion = 0;
                           $contador = 0;
                           foreach ($publicacion->pxu as $pu)
                           {
                              $calificacion += $pu->PXUSCALIFICACION;
                              $contador++;
                           }
                           echo ('Calificación -> ');

                           if ($contador > 0)
                              $calificacion = round($calificacion/$contador, 1);
                           else
                              echo ("<span class='fa fa-star'></span>");

                           for ($i=0; $i<$calificacion; $i++)
                              echo ("<span class='fa fa-star checked' style='color:orange'></span>");
                        @endphp
                     </div>
                     <div class="col-sm-6 text-sm-right"> Fecha de Entrega: {{ $publicacion->POSTFECHAENTREGA }}</div>
                  </div>
               </div>
               <div class="card-footer text-muted">
                  <div class=" row">
                     <label for="" class="col-sm-2">Avance</label> 
                     <input type="range" class="form-control-range col-sm-10" value="{{ $pu->PXUSAVANCE}}" min="0" max="10">
                  </div>
               </div>
            </div> 
            
            <!----- Comentario ----->
            @if ($publicacion->POSTCOMENTARIOS == 1) 
            <div class="card">
                  <div class="card-header">
                     Comentarios
                  </div>
                  <div class="card-body">
                     <form action="/publicaciones_x_usuario/store" method="get">
                        <div class="form-group">
                           <div class="row">
                              <input type="text" class="form-control kinput col-sm-10" name="comentario" placeholder="Comentario...">
                              <input type="hidden" name="publicacion" value="{{ $publicacion->POSTID }}">
                              <input type="hidden" name="grupo" value="{{ $grupo->GRUPOID }}">
                              <button type="submit" class="btn btn-primary col-sm-2">Comentar</button>
                           </div>
                        </div>
                     </form>
                  </div>
                     @foreach ($publicacion->pxu as $comentario)
                        @if ($comentario->PXUSCOMENTARIO != '') 
                           <div class="card-body"> 
                              <div class="row">
                                 <div class="col-sm-6">{{ $comentario->PXUSCOMENTARIO }}</div>
                                 @if (( Auth::user()->id == session('id-admin') )  ||  ( Auth::user()->id == $publicacion->autor->id ))
                                    <div class="col-sm-6 text-sm-right">
                                       <a href="/publicaciones_x_usuario/edit/{{ $comentario->id }}"><i class="las la-pen-alt"></i></a>
                                       <a href="/publicaciones_x_usuario/destroy/{{ $comentario->id }}"><i class="lar la-trash-alt"></i></a>
                                    </div>
                                 @endif
                              </div>
                           </div>
                        @endif
                     @endforeach
               </div>
               @endif
               <!----- Comentario ----->
         @endforeach
      @else
         <label for="GRUPOEXISTENTE">Has creado un nuevo grupo!</label>
         <label for="GRUPOEXISTENTE">Publica algo para comenzar...</label>
      @endif

   @else
   <div class="row">
      <div class="col-sm-9">
         <p>Tu solicitud ha sido enviada.</p>
         <p>El administrador te permitirá entrar pronto.</p>
      </div>
   </div>
   @endif

   <p>
      <a href="/home" class="badge badge-primary" style="padding:15px; margin:15px auto">
         <i class="las la-chevron-left"></i>Regresar         
      </a>
   </p>
</div>

@endsection

