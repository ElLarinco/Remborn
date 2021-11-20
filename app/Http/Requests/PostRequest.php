<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public function rules()
    {
        return [
            "title" => "required|max:50",
            "content" => "required|min:10",
            "category" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "title" => "título del post"
        ];
    }

    public function messages()
    {
        return [
            "content.required" => "Debe ingresar algún contenido en el campo"
        ];
    }
}
