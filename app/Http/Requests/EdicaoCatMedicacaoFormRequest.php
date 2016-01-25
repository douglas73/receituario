<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EdicaoCatMedicacaoFormRequest extends Request
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
            'nome'                      => 'required|min:3',
            'status'                    => 'required',
        ];
    }

    /**
     * @return Array de mensagens que substituirá a mensagem padrão para regra especifica
     */
    public function messages()
    {
        return [
            'nome.required'                 => 'O nome da categoria é de preenchimento obrigatório!.',
            'nome.min'                      => 'O comprimento mínimo para o campo nome é de 3 caracteres!.',
            'status.required'               => 'A definição de status é obrigatória.',
        ];
    }
}
