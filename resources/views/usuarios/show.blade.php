@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
<div class="container">
    <h1>Ver usuario</h1>

        <label for="USERNOMBRE">Nombre del usuario: </label>
        <input type="text" name="USERNOMBRE" id="USERNOMBRE" value="{{ $usuario->USERNOMBRE }}" readonly>
        <br>

        <label for="USEREMAIL">Email del usuario: </label>
        <input type="email" name="USEREMAIL" id="USEREMAIL" value="{{ $usuario->USEREMAIL }}" readonly>
        <br>

        <label for="USERCURSO">Curso del usuario: </label>
        <input type="text" name="USERCURSO" id="USERCURSO" value="{{ $usuario->USERCURSO }}" readonly>
        <br>

        <label for="USERNIVEL">Nivel del usuario: </label>
        <input type="text" name="USERNIVEL" id="USERNIVEL" value="{{ $usuario->USERNIVEL }}" readonly>
        <br>

        <label for="USERFECHANACIMIENTO">Fecha de nacimiento del usuario: </label>
        <input type="date" name="FECHANACIMIENTO" id="USERFECHANACIMIENTO" value="{{ $usuario->USERFECHANACIMIENTO }}" readonly>
        <br>

        <label for="USERFECHANACIMIENTO">Fotografía: </label>
        <img src="{{ asset('uploads/users/'.$usuario->USERFOTOGRAFIA)}}" alt="fotografía_usuario" height="250px" width="200px">
        <br>

    <p>
        <a href="/usuarios" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar a la lista de usuarios</a>
    </p>
</div>
@endsection
