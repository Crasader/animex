<input type="hidden" name="_token" value="{{ csrf_token() }}">

<!-- Name -->
<div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
    <label for="name">Nombre</label>
    <input class="form-control" id="name" type="text" name="name" value="{{ $category->name or old('name') }}">

    {!! $errors->first('name', '<p class="text-bold text-danger">:message</p>') !!}
</div>

<!-- Slug -->
<div class="form-group {{ $errors->has('slug') ? 'has-error' : null }}">
    <label for="slug">Enlace Permanente</label>
    <input class="form-control" id="slug" type="text" name="slug" value="{{ $category->slug or old('slug') }}">

    {!! $errors->first('slug', '<p class="text-bold text-danger">:message</p>') !!}
</div>