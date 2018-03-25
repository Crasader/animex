@extends('templates.admin-main')
@section('main-title', 'Detalles del Post')

@section('content')
<div class="box">
    <div class="box-header">
        <h3>Detalles del Post</h3>
    </div><!-- /.box-header -->
    <div class="box-body pad">
        <table class="table table-striped">
            <tr>
                <th>Categoría</th>
                <td>{!! $post->category_id !!}</td>
            </tr>

            <tr>
                <th>Usuario</th>
                <td>{!! $post->user_id !!}</td>
            </tr>

            <tr>
                <th>Título</th>
                <td>{!! $post->title !!}</td>
            </tr>

            <tr>
                <th>Enlace Permanente</th>
                <td>{!! $post->slug !!}</td>
            </tr>

            <tr>
                <th>Subtítulo</th>
                <td>{!! $post->subtitle !!}</td>
            </tr>

            <tr>
                <th>Imagen</th>
                <td>{!! $post->image !!}</td>
            </tr>

            <tr>
                <th>Texto alternativo de la imagen</th>
                <td>{!! $post->image_alt !!}</td>
            </tr>

            <tr>
                <th>Contenido</th>
                <td>{!! $post->content !!}</td>
            </tr>

            <tr>
                <th>Activo</th>
                <td>{!! $post->active ? 'Si' : 'No' !!}</td>
            </tr>

            <tr>
                <th>No me gusta</th>
                <td>{!! $post->dislike !!}</td>
            </tr>

            <tr>
                <th>Publicado en:</th>
                <td>{!! $post->published_at !!}</td>
            </tr>

            <tr>
                <th>Título Seo</th>
                <td>{!! $post->seo_title !!}</td>
            </tr>

            <tr>
                <th>Desripcion Seo</th>
                <td>{!! $post->seo_description !!}</td>
            </tr>

            <tr>
                <th>Meta Robots</th>
                <td>{!! $post->meta_robots !!}</td>
            </tr>

            <tr>
                <th>Creado en:</th>
                <td>{!! $post->created_at !!}</td>
            </tr>

            <tr>
                <th>Publicado en:</th>
                <td>{!! $post->updated_at !!}</td>
            </tr>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection