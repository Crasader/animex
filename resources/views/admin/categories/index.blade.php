@extends('templates.admin-main')
@section('main-title', 'Categorías')

@section('content')
<div class="box">
    @if(isset($categories) AND $categories != [])
        <div class="box-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="box-title">Lista de Categorías</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{!! route('admin.categories.create') !!}" title="Crear Categoría">
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
                        <th>Título</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Activo</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td class="text-center">
                            {!! toggle_status($category->id, 'categories', $category->active) !!}
                        </td>
                        <td class="text-center">
                            <a href="{!! route('admin.categories.show', $category->id) !!}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{!! route('admin.categories.edit', $category->id) !!}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            {!! delete_resource($category->id, 'categories') !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="box-header">
            <h3 class="box-title">Crea tu Categoría</h3>
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
        return confirm("¿ Desea eliminar la categoría ?");
    });
</script>
@endsection