<h1>Vista Users</h1>
<p>Esta vista es Users</p>

    <table border="1" cellspacing="0" cellpadding="5">
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
                <td>&nbsp;</td>
            </tr>
        @endforeach
        </tbody>
    </table>