<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CatMedicacaoFormRequest extends Request
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
            'nome'                      => 'required|unique:categoria_medicacao,nome|min:3',
            'status'                    => 'required',
        ];
    }
    /**
     * @return Array de mensagens que substituirá a mensagem padrão para regra especifica
     */
    public function messages()
    {
        return [
            'nome.required'             => 'O nome da Categoria é obrigatório!',
            'nome.unique'               => 'Esta categoria já esta cadastrada!',
            'nome.min'                  => 'O Nome da categoria deve ser de pelo menos 3 caracteres!',
            'status.required'           => 'O status da Categoria é obrigatório!',
        ];
    }


}
