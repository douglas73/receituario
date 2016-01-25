<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EdicaoMedicacaoFormRequest extends Request
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
            'nome'  => 'required',
            'categoria_medicacao_id'    => 'required',
            'posologia'                 => 'required',
            'status'                    => 'required',
        ];
    }

    /**
     * @return Array de mensagens que substituirá a mensagem padrão para regra especifica
     */
    public function messages()
    {
        return [
            'nome.required'                     => 'O nome do medicamento é obrigatório!.',
            'categotia_medicacao_id.required'   => 'A categoria do medicamento é obrigatório.',
            'posologia.required'                => 'A posologia do medicamento é de preenchimento obrigatório.',
        ];
    }

}
