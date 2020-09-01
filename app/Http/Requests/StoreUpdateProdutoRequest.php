<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProdutoRequest extends FormRequest
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
            'nome' => 'required|min:3|max:255',
            'descricao' => 'required|min:3|max:1000',
            'imagem' => 'nullable|image'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "O nome de usuário é obrigatório",
            'nome.min' => 'O mínimo de caracteres permitidos são três',
            'descricao.requiured' => 'O upload da imagem é obrigatório',
            'imagem.image' => 'O arquivo tem que ser uma imagem'
        ];
    }

}
