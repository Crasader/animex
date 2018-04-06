@extends('templates.admin-main')
@section('main-title', 'Editar Categoría')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="text-center">Editar Categoría</h3>
    </div><!-- /.box-header -->
    <div class="box-body pad">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            <input type="hidden" name="_method" value="PATCH">

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @include('admin.categories._form')
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">
                        <i class="fa fa-remove"></i>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <input type="submit" class="btn btn-success" value="Actualizar">
                </div>
            </div>
        </form>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection

