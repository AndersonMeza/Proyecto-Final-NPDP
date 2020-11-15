@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">   
                <i class="las la-pen-alt"></i> {{ __('Editar Perfil') }}
            </div>            
                <div class="cardbody">
                    <form method="POST" action="/usuarios/update/{{ $usuario->id }}" enctype="multipart/form-data">
                        @csrf
                        
                        <label for="name">Nombre del usuario: </label>
                        <input  type="text" name="name" id="name" value="{{ $usuario->name }}">
                        <br>
                    

                        <label for="email">Email del usuario: </label>
                        <input  type="email" name="email" id="email" value="{{ $usuario->email }}">
                        <br>

                        <label for="curso">Curso del usuario: </label>
                        <input  type="text" name="curso" id="curso" value="{{ $usuario->curso }}">
                        <br>

                        <label for="nivel">Nivel del usuario: </label>
                        <input  type="text" name="nivel" id="nivel" value="{{ $usuario->nivel }}">
                        <br>

                        <label for="nacimiento">Fecha de nacimiento del usuario: </label>
                        <input type="date" name="nacimiento" value="{{ $usuario->nacimiento }}" max="{{ date('Y-m-d', strtotime('-7 year')) }}">
                        <br>

                        <label for="fotografia">Fotografía: </label>
                        <img  src="{{ asset('uploads/users/'.$usuario->fotografia)}}" alt="fotografía_usuario" height="200px" width="200px "></img>
                        <br><input type="file" name="fotografia" id="fotografia">
                        <br><br>
                       

                        <button class="formaboton badge badge-primary " type="submit">
                            <i class="las la-save"></i>  Guardar                   
                        </button>
                    </form>
                    <p>
                        <a href="/home" class="badge badge-primary" style="padding:13px; margin:30px; margin-left:380px">
                            <i class="las la-chevron-left"></i>Regresar
                        </a>
                    </p>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
