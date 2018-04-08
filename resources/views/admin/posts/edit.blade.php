@extends('templates.admin-main')
@section('main-title', 'Editar Publicación')

@section('custom-styles')
<!-- Bootstrap Datepicker -->
<link rel="stylesheet" href="/css/admin/bootstrap-datepicker.css">
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3>Formulario para editar el post</h3>
    </div><!-- /.box-header -->
    <div class="box-body pad">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">

            @include('admin.posts._form')

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
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

@section('custom-scripts')
    @include('admin.posts._shared-scripts')
@endsection

