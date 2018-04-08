<?php

namespace Animex\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Validation\Rule;

class UsersCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Route $route)
    {
        $id = ($route->parameters != []) ? $route->parameters['user']->id : null;

        return [
            'first_name' => 'required|between:4,255',
            'last_name'  => 'required|between:4,255',
            'username'      => [
                'required',
                'between:4,255',
                'unique:users,username,'.$id
            ],
            'email'      => [
                'required',
                'between:4,255',
                'unique:users,email,'.$id
            ],
            'password'   => 'required|confirmed|between:4,255',
            'password_confirmation' => 'required|same:password|between:4,150',
            'type'                  => Rule::in(['guest', 'admin']),
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Escriba el nombre',
            'first_name.between'  => 'El nombre debe ser de :min a :max caracteres',

            'last_name.required' => 'Escriba el apellido',
            'last_name.between'  => 'El nombre debe ser de :min a :max caracteres',

            'username.required' => 'Escriba el nombre de usuario',
            'username.betweed'  => 'El nombre de usuario debe ser de :min a :max caracteres',
            'username.unique'   => 'El usuario ya ha sido registrado, &iexcl; Elija Otro !',

            'email.required' => 'Escriba el email',
            'email.between'  => 'El correo electrónico debe ser de :min a :max caracteres',
            'email.unique'   => 'El correo electrónico ya ha sido registrado, &iexcl; Elija Otro !',


            'password.required'  => 'Escriba la contraseña',
            'password.between'   => 'La contraseña debe ser de :min a :max caracteres',
            'password.confirmed' => 'La contraseña debe coincidir con la confirmación de contraseña',

            'password_confirmation.required'  => 'Escriba la confirmación de contraseña',
            'password_confirmation.between'   => 'La confirmación de contraseña debe ser de :min a :max caracteres',
            'password_confirmation.same'     => 'La confirmación de contraseña debe coincidir con la contraseña',

            'type.in' => 'El tipo de usuario es incorrecto',
        ];
    }
}
