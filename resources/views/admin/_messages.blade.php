@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session()->get('message') }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        @if(count($errors->all()) == 1)
            <strong>Hubo 1 error en el formulario:</strong>
        @else
            <strong>Los siguientes campos tienen errores:</strong>
        @endif
        <ul>
            @foreach ($errors->all() as $error)
                <li><b>{{ $error }}</b></li>
            @endforeach
        </ul>
    </div>
@endif