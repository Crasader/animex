<?php

namespace Animex\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class PostsRequest extends FormRequest
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
     * @param Route $route
     * @return array
     */
    public function rules(Route $route)
    {
        $id = ($route->parameters != []) ? $route->parameters['post'] : null;

        return [
            'category_id'     => 'required',
            'title'           => 'required|between:4,150',
            'slug'            => 'required|between:4,150|unique:posts,slug,'.$id,
            'published_at'    => 'required',
            'content'         => 'required|min:12',
            'seo_title'       => 'required|max:70',
            'seo_description' => 'required|max:165',
            'meta_robots'     => 'required',
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
            'category_id.required'     => 'Seleccione una categoría',

            'title.required'           => 'Escriba un título',
            'title.between'            => 'El título debe ser de :min a :max caracteres',

            'slug.required'            => 'Escriba un enlace permanente',
            'slug.between'             => 'El enlace permanente debe ser de :min a :max caracteres',

            'published_at.required'    => 'Seleccione una fecha de publicación',

            'content.required'         => 'Escriba un contenido',
            'content.min'              => 'El contenido debe ser minimo de :min caracteres',

            'seo_title.required'       => 'Escriba el título seo',
            'seo_description.required' => 'Escriba una descripción seo',
            'meta_robots.required'     => 'Seleccione una opcion de meta robots',
        ];
    }
}
