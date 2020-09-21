@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Publicaciones_x_Usuario</h1>

        <form method="POST" action="/publicaciones_x_usuario/store">
        @csrf     

            <label for="PXUSUSUARIO">Seleccione publicación: </label>
            <select name="POSTID" id="" class="col-4">
            @foreach ($publicaciones as $post)
                <option value="{{ $post->POSTID }}" class="col-6">{{ $post->POSTTEXTO }}</option>
            @endforeach
            </select>
            <br>     

            <label for="PXUSUSUARIO">Seleccione usuario: </label>
            <select name="USERID" id="" class="col-4">
            @foreach ($usuarios as $user)
                <option value="{{ $user->USERID }}" class="col-6">{{ $user->USERNOMBRE }}</option>
            @endforeach
            </select>
            <br>    

            <label for="PXUSCOMENTARIO">Comentario: </label>
            <input type="text" name="PXUSCOMENTARIO" id="PXUSCOMENTARIO">
            <br>

            <label for="PXUSAVANCE">Avance: </label>
            <input type="number" name="PXUSAVANCE" id="PXUSAVANCE">
            <br>

            <label for="PXUSCALIFICACION">Calificación: </label>
            <input type="number" name="PXUSCALIFICACION" id="PXUSCALIFICACION">
            <br>

            <button type="submit">Crear "Publicacion_x_Usuario"</button>
        
    </form>

        <p>
            <a
            href="/publicaciones_x_usuario" class="badge badge-primary" style="padding:15px; margin:15px auto">Regresar a la lista de Publicaciones_x_Usuario</a>
            
        </p>
    </div>

@endsection
