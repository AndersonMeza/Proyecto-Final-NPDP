@extends('layouts.app')

@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
	<h2 class="mb-4">Últimas Publicaciones</h2>

	@if (count($publicaciones)>0)
      @foreach ($publicaciones as $publicacion)
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-sm-6">{{ $publicacion->autor->name }}</div>
                  <div class="col-sm-6 text-sm-right">{{ $publicacion->grupo->GRUPONOMBRE }}</div>
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
						<div class="col-sm-6 text-sm-right">{{ $publicacion->POSTFECHAENTREGA }}</div>
					</div>
            </div>
            <div class="card-footer text-muted">
               <input type="range" class="form-control-range" value="{{ $pu->PXUSAVANCE}}" min="0" max="10" disabled="true">
            </div>
         </div>
      @endforeach
	@else
		<p>Prueba unirte a un grupo o creo otro nuevo para ver más contenido.</p>
   @endif
   <publicaciones-component></publicaciones-component>
	</div>

@endsection
