<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DocumentoTemplateFormRequest extends Request
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
            'documento_tipo_id'                 => 'required',
            'texto_central'                     => 'required|min:10',
            'status'                            => 'required',
        ];
    }

    /**
     * @return Array de mensagens que substituirá a mensagem padrão para regra especifica
     */
    public function messages()
    {
        return [
            'documento_tipo_id.required'        => 'O tipo de documento é obrigatório!.',
            'texto_central.required'            => 'O texto que compoe o corpo do template deve ser preenchido!',
            'texto_central.min'                 => 'O texto que compoe o corpo do template deve ter uma quantidade relativa
            de texto para o tal!',
            'status.required'                   => 'O status do documento não foi definido.'
        ];
    }
}
