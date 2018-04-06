<?php

namespace Animex\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class CategoriesRequest extends FormRequest
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
        return [
            'name' => 'required|between:4,150',
            'slug' => [
                'required',
                'between:4,150',
                'unique:categories,slug,'.$route->parameters ?
                    $route->parameters['category']->id :
                    null
            ]
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
            'name.required' => 'Escriba el nombre',
            'name.between'  => 'El nombre debe ser de :min a :max caracteres',

            'slug.required' => 'Escriba un enlace permanente',
            'slug.between'  => 'El enlace permanente debe ser de :min a :max caracteres',
            'slug.unique'   => 'El enlace permanente ya ha sido registrado',
        ];
    }
}
