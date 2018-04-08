<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
    <div class="col-md-6">
        <!-- Category -->
        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : null }}">
            <label for="category_id">Categoría</label>
            <select name="category_id" id="category_id" class="form-control">
                <option disabled selected>Selecciona una categoría</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ (isset($post) && ($category->id == $post->category_id) || ($category->id == old('category_id'))) ? 'selected' : null }}>
                    {{ $category->name }}
                </option>
            @endforeach
            </select>

            {!! $errors->first('category_id', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Title -->
        <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
            <label for="title">Título</label>
            <input class="form-control" id="title" type="text" name="title" value="{{ $post->title or old('title') }}">

            {!! $errors->first('title', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Slug -->
        <div class="form-group {{ $errors->has('slug') ? 'has-error' : null }}">
            <label for="slug">Enlace Permanente</label>
            <input class="form-control" id="slug" type="text" name="slug" value="{{ $post->slug or old('slug') }}">

            {!! $errors->first('slug', '<p class="text-bold text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <!-- Subtitle -->
        <div class="form-group {{ $errors->has('subtitle') ? 'has-error' : null }}">
            <label for="subtitle">Subtítulo</label>
            <input class="form-control" id="subtitle" type="text" name="subtitle" value="{{ $post->subtitle or old('subtitle') }}">

            {!! $errors->first('subtitle', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Published At -->
        <div class="form-group {{ $errors->has('published_at') ? 'has-error' : null }}">
            <label for="published_at">Fecha de Publicación</label>
            <input name="published_at" class="form-control" id="datepicker" type="text" value="{{ (isset($post->published_at)) ? $post->published_at->format('m/d/Y') : old('published_at') }}">

            {!! $errors->first('published_at', '<p class="text-bold text-danger">:message</p>') !!}
        </div>
    </div>
</div>

<!-- Content -->
<div class="form-group {{ $errors->has('content') ? 'has-error' : null }}">
    <label for="content">Contenido</label>
    <textarea class="form-control" name="content" id="content" rows="10">{{ $post->content or old('content') }}</textarea>

    {!! $errors->first('content', '<p class="text-bold text-danger">:message</p>') !!}
</div>

<hr>

<h4>Imagen del Post</h4>

<div class="row">
    <div class="col-md-6">
        @if($post->image)
            <img src="/images/posts/{{ $post->image }}" alt="{{ $post->image_alt }}" class="img-responsive">
        @else
            <img src="/images/no-image.jpg" alt="Sin Imagen" class="img-responsive">
        @endif
    </div>
    <div class="col-md-6">
        <!-- Image -->
        <div class="form-group {{ $errors->has('image') ? 'has-error' : null }}">
            <label for="image">Imagen</label>
            <input class="form-control" id="image" type="file" name="image">

            {!! $errors->first('image', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Image Alternative Text -->
        <div class="form-group {{ $errors->has('image_alt') ? 'has-error' : null }}">
            <label for="image_alt">Texto Alternativo</label>
            <input class="form-control" id="image_alt" type="text" name="image_alt" value="{{ $post->image_alt or old('image_alt') }}">

            {!! $errors->first('image_alt', '<p class="text-bold text-danger">:message</p>') !!}
        </div>
    </div>
</div>

<hr>

<h4>Seo</h4>

<div class="row">
    <div class="col-md-6">
        <!-- Seo Title -->
        <div class="form-group {{ $errors->has('seo_title') ? 'has-error' : null }}">
            <label for="seo_title">Título Seo</label>
            <input class="form-control" id="seo_title" type="text" name="seo_title" value="{{ $post->seo_title or old('seo_title') }}">

            {!! $errors->first('seo_title', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Robots -->
        <div class="form-group {{ $errors->has('meta_robots') ? 'has-error' : null }}">
            <label for="meta_robots">Meta Robots</label>
            <select name="meta_robots" id="meta_robots" class="form-control">
                <option disabled selected>Selecciona una opción</option>
                <option value="index, follow"
                    {{ (isset($post) && ($post->meta_robots == 'index, follow')) ? 'selected' : null }}
                    {{ (old('meta_robots') == 'index, follow') ? 'selected' : null }}
                >Seguir e Indexar</option>
                <option value="noindex, follow"
                    {{ (isset($post) && ($post->meta_robots == 'noindex, follow')) ? 'selected' : null }}
                        {{ (old('meta_robots') == 'noindex, follow') ? 'selected' : null }}
                >No Seguir e Indexar</option>
                <option value="index, nofollow"
                    {{ (isset($post) && ($post->meta_robots == 'index, nofollow')) ? 'selected' : null }}
                    {{ (old('meta_robots') == 'index, nofollow') ? 'selected' : null }}
                >Indexar y no Seguir</option>
                <option value="noindex, nofollow"
                    {{ (isset($post) && ($post->meta_robots == 'noindex, nofollow')) ? 'selected' : null }}
                    {{ (old('meta_robots') == 'noindex, nofollow') ? 'selected' : null }}
                >No Seguir y No Indexar</option>
            </select>

            {!! $errors->first('meta_robots', '<p class="text-bold text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <!-- Seo Description -->
        <div class="form-group {{ $errors->has('seo_description') ? 'has-error' : null }}">
            <label for="seo_description">Descripción Seo</label>
            <textarea name="seo_description" class="form-control" id="seo_description" rows="5">{{ $post->seo_description or old('seo_description') }}</textarea>

            {!! $errors->first('seo_description', '<p class="text-bold text-danger">:message</p>') !!}
        </div>
    </div>
</div>
