@extends('layouts.app')

@section('content')
<div class="container">
    <h1>
        Vista Users <small class="text-muted">Esta vista es Users</small>
    </h1>
    

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->firstname }}</td>
                <td>{{ $usuario->lastname }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a href="{{ url("user/edit/$usuario->id") }}">
                        Editar
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection