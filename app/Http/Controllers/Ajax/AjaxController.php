<?php

namespace App\Http\Controllers\Ajax;

use App\DocumentoTemplate;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

class AjaxController extends Controller
{

    public function preencheLstTemplate(Request $request)
    {
        $tipo_id = $request->dtid;
        if($request->ajax()){
            //Retornar todos os templates deste tipo de documento
            $templates = DocumentoTemplate::where('documento_tipo_id', $tipo_id)->get();

            if(count($templates)>0)
            {
                $itensTemplates = null;

                foreach($templates as $template)
                {
                    $itensTemplates.= '<option value="'.$template->id.'">'.$template->nome.'</option>';
                }
                return $itensTemplates;
            }
        }

    }

    public function carregaTemplate(Request $request)
    {
        //setando variáveis
        $id_tipo_documento      = $request->doc_type;
        $id_template_documento  = $request->doctemp;
        if($request->ajax()){
            $documento = DocumentoTemplate::find($id_template_documento);
            return $documento->texto_central;
        }
    }

    public function carregaPacienteNome(Request $request)
    {
        $paciente_id = $request->paciente;
        if($request->ajax()){
            $paciente = Paciente::findOrFail($paciente_id);
            if($paciente->nome == ""){
                return 'NÃO ESPECIFICADO!';
            }else{
                session()->put('idPaciente', $paciente->id);
                return strtoupper($paciente->nome);
            }
        }
    }

    public function carregaDadosPaciente(Request $request)
    {
        //Pega o id do paciente na sessão gravada ao carregar paciente
        $idPaciente = session()->get('idPaciente');

        if($request->ajax()){

        }

        $paciente = Paciente::findOrFail($idPaciente);

        if(count($paciente > 0)){
            //Cria as variaveis para o json
            $retorno['p_nome']              = $paciente->nome;
            $retorno['p_identidade']        = $paciente->identidade;
            $retorno['p_cpf']               = $paciente->cpf;
            $retorno['p_sexo']              = $paciente->sexo;
            $retorno['p_nascimento']        = $paciente->dtnascimento->format('d/m/Y');
            $retorno['p_profissao']         = $paciente->profissao;
            $retorno['p_escolaridade']      = $paciente->escolaridade;

        }else{
            //Se houver error,  grava no indice msg_error e valida no formulario. se tiver,  cancela operação javascript
            $retorno['mgs_error']           = '<li>Não foi econtrado Paciente</li>';
        }

        return json_encode($retorno);

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
