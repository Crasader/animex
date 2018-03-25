<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
    <div class="col-md-6">
        <!-- Category -->
        <div class="form-group">
            <label for="category_id">Categoría</label>
            <select name="category_id" id="category_id" class="form-control">
                <option disabled selected>Selecciona una categoría</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ (isset($post) && ($category->id == $post->id)) ? 'selected' : null }}>
                    {{ $category->name }}
                </option>
            @endforeach
            </select>
        </div>

        <!-- Title -->
        <div class="form-group">
            <label for="title">Título</label>
            <input class="form-control" id="title" type="text" name="title" value="{{ $post->title or old('title') }}">
        </div>

        <!-- Slug -->
        <div class="form-group">
            <label for="slug">Enlace Permanente</label>
            <input class="form-control" id="slug" type="text" name="slug" value="{{ $post->slug or old('slug') }}">
        </div>
    </div>
    <div class="col-md-6">
        <!-- Subtitle -->
        <div class="form-group">
            <label for="subtitle">Subtítulo</label>
            <input class="form-control" id="subtitle" type="text" name="subtitle" value="{{ $post->subtitle or old('subtitle') }}">
        </div>

        <!-- Published At -->
        <div class="form-group">
            <label for="published_at">Fecha de Publicación</label>
            <input name="published_at" class="form-control" id="datepicker" type="text" value="{{ (isset($post->published_at)) ? $post->published_at->format('m/d/Y') : old('published_at') }}">
        </div>
    </div>
</div>

<!-- Content -->
<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" name="content" id="content" rows="10">{{ $post->content or old('content') }}</textarea>
</div>

<hr>

<h4>Imagen del Post</h4>

<div class="row">
    <div class="col-md-6">
        <img src="/images/no-image.jpg" alt="Sin Imagen" class="img-responsive">
    </div>
    <div class="col-md-6">
        <!-- Image -->
        <div class="form-group">
            <label for="image">Imagen</label>
            <input class="form-control" id="image" type="text" name="image">
        </div>

        <!-- Image Alternative Text -->
        <div class="form-group">
            <label for="image_alt">Texto Alternativo</label>
            <input class="form-control" id="image_alt" type="text" name="image_alt" value="{{ $post->image_alt or old('image_alt') }}">
        </div>
    </div>
</div>

<hr>

<h4>Seo</h4>

<div class="row">
    <div class="col-md-6">
        <!-- Seo Title -->
        <div class="form-group">
            <label for="seo_title">Título Seo</label>
            <input class="form-control" id="seo_title" type="text" name="seo_title" value="{{ $post->seo_title or old('seo_title') }}">
        </div>

        <!-- Robots -->
        <div class="form-group">
            <label for="meta_robots">Meta Robots</label>
            <select name="meta_robots" id="meta_robots" class="form-control">
                <option disabled selected>Selecciona una opción</option>
                <option value="index, follow">Seguir e Indexar</option>
                <option value="noindex, follow">No Seguir e Indexar</option>
                <option value="index, nofollow">Indexar y no Seguir</option>
                <option value="noindex, nofollow">No Seguir y No Indexar</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Seo Description -->
        <div class="form-group">
            <label for="seo_description">Descripción Seo</label>
            <textarea name="seo_description" class="form-control" id="seo_description" rows="5">{{ $post->seo_description or old('seo_description') }}</textarea>
        </div>
    </div>
</div>
