@extends('templates.admin-main')
@section('main-title', 'Publicaciones')

@section('content')
<div class="box">
    @if(isset($posts) AND $posts != [])
        <div class="box-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="box-title">Últimos Posts</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{!! route('admin.posts.create') !!}" title="Crear Post">
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
                        <th class="text-center">Categoría</th>
                        <th class="text-center">Activo</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td class="text-center">{{ $post->category_id }}</td>
                        <td class="text-center">
                            @if($post->active)
                                <i class="fa fa-check text-success"></i>
                            @else
                                <i class="fa fa-remove text-danger"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{!! route('admin.posts.show', $post->id) !!}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{!! route('admin.posts.edit', $post->id) !!}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="{!! route('admin.posts.destroy', $post->id) !!}" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="box-header">
            <h3 class="box-title">Escribe tu publicaci&oacute;n</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
            <form>
                    <textarea class="textarea" id="editor" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </form>
        </div>
    @endif
</div>
@endsection

@section('custom-scripts')
    <!-- CK Editor -->
    <script src="/js/admin/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor', {
                language: 'es',
                scayt_sLang: 'es_ES',
            });
        })
    </script>
@endsection