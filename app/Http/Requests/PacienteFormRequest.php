<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PacienteFormRequest extends Request
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
            'nome'                      => 'required|min:3|max:30',
            'dtnascimento'              => 'required|date',
        ];
    }

    /**
     * @return Array de mensagens que substituirá a mensagem padrão para regra especifica
     */
    public function messages()
    {
        return [
            'nome.required'                     => 'O nome do Paciente é obrigatório!.',
            'nome.min'                          => 'O comprimento mínino para o nome do paciente é de 3 caracteres.',
            'nome.max'                          => 'O comprimento máximo para o nome do paciente é de 30 caracteres.',
            'dtnascimento.required'             => 'A Data de nascimento é obrigatório.',
            'dtnascimento.date'                 => 'O formato da Data de nascimento esta inválido.',
        ];
    }
}
