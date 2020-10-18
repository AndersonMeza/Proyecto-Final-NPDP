@extends('layouts.app')

@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
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
                  @foreach ($publicacion->pxu as $pu)
                     Calificación -> {{ $pu->PXUSCALIFICACION }}
                  @endforeach
               </div>
               <div class="col-sm-6 text-sm-right"> Fecha de Entrega: {{ $publicacion->POSTFECHAENTREGA }}</div>
            </div>
         </div>
         <div class="card-footer text-muted row">
            <label for="" class="col-sm-2">Avance</label> 
            <input type="range" class="form-control-range col-sm-10" value="{{ $pu->PXUSAVANCE}}" min="0" max="10">
         </div>
      </div>
   @endforeach
@else
   <label for="GRUPOEXISTENTE">No encontramos lo que estás buscando...</label>
@endif
<p>
   <a href="/grupos/show/{{ session('id-grupo') }}" class="badge badge-primary" style="padding:15px; margin:15px auto"> Regresar</a>
</p>
</div>

@endsection