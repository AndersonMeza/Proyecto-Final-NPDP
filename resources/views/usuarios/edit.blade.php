@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar usuario</h1>

    <form method="POST" action="/usuarios/update/{{ $usuario->USERID }}" enctype="multipart/form-data">
        @csrf

        <label for="USERNOMBRE">Nombre del usuario: </label>
        <input type="text" name="USERNOMBRE" id="USERNOMBRE" value="{{ $usuario->USERNOMBRE }}">
        <br>

        <label for="USEREMAIL">Email del usuario: </label>
        <input type="email" name="USEREMAIL" id="USEREMAIL" value="{{ $usuario->USEREMAIL }}">
        <br>

        <label for="USERCURSO">Curso del usuario: </label>
        <input type="text" name="USERCURSO" id="USERCURSO" value="{{ $usuario->USERCURSO }}">
        <br>

        <label for="USERNIVEL">Nivel del usuario: </label>
        <input type="text" name="USERNIVEL" id="USERNIVEL" value="{{ $usuario->USERNIVEL }}">
        <br>

        <label for="USERFECHANACIMIENTO">Fecha de nacimiento del usuario: </label>
        <input type="date" name="USERFECHANACIMIENTO" id="USERFECHANACIMIENTO" value="{{ $usuario->USERFECHANACIMIENTO }}">
        <br>

        <label for="USERFOTOGRAFIA">Fotografía: </label>
        <img src="{{ asset('uploads/users/'.$usuario->USERFOTOGRAFIA)}}" alt="fotografía_usuario" height="250px" width="200px">
        <br><input type="file" name="USERFOTOGRAFIA" id="USERFOTOGRAFIA">
        <br><br>

        <button type="submit">Editar usuario</button>
    </form>
    <p>
        <a href="/usuarios" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar a la lista de usuarios</a>
    </p>
</div>
@endsection
