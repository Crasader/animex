@extends('templates.admin-main')
@section('main-title', 'Detalles de la Categoría')

@section('content')
<div class="box">
    <div class="box-header">
        <h3>Detalles de la Categoría</h3>
    </div><!-- /.box-header -->
    <div class="box-body pad">
        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <td>{{ $category->name }}</td>
            </tr>

            <tr>
                <th>Enlace Permanente</th>
                <td>{{ $category->slug }}</td>
            </tr>

            <tr>
                <th>Activo</th>
                <td>{{ $category->active ? 'Si' : 'No' }}</td>
            </tr>

            <tr>
                <th>Creado en:</th>
                <td>{{ $category->created_at }}</td>
            </tr>

            <tr>
                <th>Publicado en:</th>
                <td>{{ $category->updated_at }}</td>
            </tr>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection