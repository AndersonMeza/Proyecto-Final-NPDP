@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear usuario</h1>

    <form method="POST" action="/usuarios/store" enctype="multipart/form-data">
        @csrf

        <label for="USERNOMBRE">Nombre del usuario: </label>
        <input type="text" name="USERNOMBRE" id="USERNOMBRE">
        <br>

        <label for="USEREMAIL">Email del usuario: </label>
        <input type="email" name="USEREMAIL" id="USEREMAIL">
        <br>

        <label for="USERPASSWORD">Contraseña del usuario: </label>
        <input type="password" name="USERPASSWORD" id="USERPASSWORD">
        <br>

        <label for="USERCURSO">Curso del usuario: </label>
        <input type="text" name="USERCURSO" id="USERCURSO">
        <br>

        <label for="USERNIVEL">Nivel del usuario: </label>
        <input type="text" name="USERNIVEL" id="USERNIVEL">
        <br>

        <label for="USERFECHANACIMIENTO">Fecha de nacimiento del usuario: </label>
        <input type="date" name="USERFECHANACIMIENTO" id="USERFECHANACIMIENTO">
        <br>

        <label for="USERFOTOGRAFIA">Fotografía: </label>
        <input type="file" name="USERFOTOGRAFIA" id="USERFOTOGRAFIA">
        <br>

        <button type="submit">Crear usuario</button>
        
    </form>

    <p>
        <a href="/usuarios" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar a la lista de usuarios</a>
    </p>
</div>
@endsection
