<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'price' => 'required',
            'author' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'max' => 'O campo :attribute não pode ter mais que 255 caracteres!'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'título',
            'subtitle' => 'sub-título',
            'price' => 'preço',
            'author' => 'autor'
        ];
    }
}
