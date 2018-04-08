<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
    <div class="col-md-6">
        <!-- First Name -->
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : null }}">
            <label for="first_name">Nombre</label>
            <input class="form-control" id="first_name" type="text" name="first_name" value="{{ $user->first_name or old('first_name') }}">

            {!! $errors->first('first_name', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Last Name -->
        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : null }}">
            <label for="last_name">Apellido</label>
            <input class="form-control" id="last_name" type="text" name="last_name" value="{{ $user->last_name or old('last_name') }}">

            {!! $errors->first('last_name', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Username -->
        <div class="form-group {{ $errors->has('username') ? 'has-error' : null }}">
            <label for="username">Nombre de Usuario</label>
            <input class="form-control" id="username" type="text" name="username" value="{{ $user->username or old('username') }}">

            {!! $errors->first('username', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <div class="form-group {{ $errors->has('type') ? 'has-error' : null }}">
            <label for="type">Tipo de usuario</label>
            <select name="type" id="type" class="form-control">
                <option value="guest" selected
                        {{ (isset($user) && ($user->type == 'guest')) ? 'selected' : null }}
                        {{ (old('type') == 'guest') ? 'selected' : null }}
                >Invitado</option>
                <option value="admin"
                        {{ (isset($user) && ($user->type == 'admin')) ? 'selected' : null }}
                        {{ (old('type') == 'admin') ? 'selected' : null }}
                >Administrador</option>
            </select>

            {!! $errors->first('type', '<p class="text-bold text-danger">:message</p>') !!}
        </div>
    </div><!-- /.col -->
    <div class="col-md-6">
        <!-- Email -->
        <div class="form-group {{ $errors->has('email') ? 'has-error' : null }}">
            <label for="name">Correo Electrónico</label>
            <input class="form-control" id="name" type="email" name="email" value="{{ $user->email or old('email') }}">

            {!! $errors->first('email', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Password -->
        <div class="form-group {{ $errors->has('password') ? 'has-error' : null }}">
            <label for="password">Contraseña</label>
            <input class="form-control" id="password" type="password" name="password">

            {!! $errors->first('password', '<p class="text-bold text-danger">:message</p>') !!}
        </div>

        <!-- Password Confirmation -->
        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : null }}">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation">

            {!! $errors->first('password_confirmation', '<p class="text-bold text-danger">:message</p>') !!}
        </div>
    </div><!-- /.col -->
</div><!-- /.row -->