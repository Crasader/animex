@extends('templates.admin-main')
@section('main-title', 'Crear Users')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="text-center">Crear Usuario Nuevo</h3>
    </div><!-- /.box-header -->
    <div class="box-body pad">
        <form action="{{ route('admin.users.store') }}" method="POST">
            @include('admin.users._form')

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                        <i class="fa fa-remove"></i>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <input type="submit" class="btn btn-success" value="Crear">
                </div>
            </div>
        </form>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection