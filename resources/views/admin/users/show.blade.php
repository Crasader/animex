@extends('templates.admin-main')
@section('main-title', 'Detalles del Usuario')

@section('content')
<div class="box">
    <div class="box-header">
        <h3>Detalles del Usuario</h3>
    </div><!-- /.box-header -->
    <div class="box-body pad">
        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <td>{{ $user->first_name }}</td>
            </tr>

            <tr>
                <th>Apellido</th>
                <td>{{ $user->last_name }}</td>
            </tr>

            <tr>
                <th>Nombre de Usuario</th>
                <td>{{ $user->username }}</td>
            </tr>

            <tr>
                <th>Correo Electrónico</th>
                <td>{{ $user->email }}</td>
            </tr>

            <tr>
                <th>Tipo</th>
                <td>{{ $user->type == 'guest' ? 'Invitado' : 'Administrador' }}</td>
            </tr>

            <tr>
                <th>Activo</th>
                <td>{{ $user->active ? 'Si' : 'No' }}</td>
            </tr>

            <tr>
                <th>Fecha de creación:</th>
                <td>{{ $user->created_at }}</td>
            </tr>

            <tr>
                <th>Fecha de actualización:</th>
                <td>{{ $user->updated_at }}</td>
            </tr>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection