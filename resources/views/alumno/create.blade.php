@extends('layouts.app')

@section('content')
    <div class="container">
        aqui va el formulario para crear alumnos
        <form action="{{ url('alumno') }}" class="form" method="post">
            <input type="text" name="matricula" id="matricula" placeholder="Matricula" required>
            <input type="text" name="nombres" id="nombres" placeholder="Nombres" required>
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
            <input type="email" name="correo_electronico" id="correo_electronico" placeholder="Correo electronico" required>
            <label>
                Mujer
                <input type="radio" name="genero" id="genero" value="M">
            </label>
            <label>
                Hombre
                <input type="radio" name="genero" id="genero" value="H">
            </label>
            <button type="submit">Registrar nuevo usuario</button>
        </form>
    </div>
@endsection