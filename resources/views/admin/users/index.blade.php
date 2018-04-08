@extends('templates.admin-main')
@section('main-title', 'Usuarios')

@section('content')
<div class="box">
    @if(isset($users) AND $users != [])
        <div class="box-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="box-title">Lista de Usuarios</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{!! route('admin.users.create') !!}" title="Crear Usuario">
                        <i class="fa fa-file"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nobre de Usuario</th>
                        <th>Correo Electrónico</th>
                        <th>Tipo</th>
                        <th class="text-center">Activo</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type == 'guest' ? 'Invitado' : 'Administrador' }}</td>
                        <td class="text-center">
                            {!! toggle_status($user->id, 'users', $user->active) !!}
                        </td>
                        <td class="text-center">
                            <a href="{!! route('admin.users.show', $user->username) !!}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{!! route('admin.users.edit', $user->id) !!}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            {!! delete_resource($user->id, 'users') !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="box-header">
            <h3 class="box-title">Crea usuario nuevo</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
            <form>
                <textarea class="textarea" id="editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </form>
        </div>
    @endif
</div>
@endsection

@section('custom-scripts')
<script>
    $(document).on("submit", "#delete", function() {
        return confirm("¿ Desea eliminar el usuario ?");
    });
</script>
@endsection