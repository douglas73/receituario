<?php

namespace App\Http\Controllers\Ajax;

use App\DocumentoTemplate;
use App\Paciente;
use App\DocumentoTemporario;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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

    public function montadocumento(Request $request, $codigoHtml)
    {
       //  $htmlDoc    = $request->docHtml;
        // return 'Resposta: '.$htmlDoc;


        $mpdf = new \mPDF('',    // mode - default ''
            '',    // format - A4, for example, default ''
            0,     // font size - default 0
            '',    // default font family
            10,    // margin_left
            10,    // margin right
            16,     // margin top
            16,    // margin bottom
            9,     // margin header
            9,     // margin footer
            'L');  // L - landscape, P - portrait

        // $mpdf->WriteHTML(file_get_contents(asset("css/bootstrap.css")), 1);
        $stylesheet = file_get_contents(asset("css/bootstrap.css"));
        $mpdf->WriteHTML($stylesheet,1);


        //  $mpdf->WriteHTML('<p>Hallo World</p>');
        // $mpdf->WriteHTML(view('documento.docpadrao')->render(),2);
        $mpdf->WriteHTML($codigoHtml,2);

        return $mpdf->Output();

    }

    /**
     * Este método,  solicitado por ajqx no formulario de criação de documentos,   funciona da seguinte forma:
     * Ele recebe via POST 2 valores(o conteúdo html da documento e o id do tipo de documento).
     * Ele entrão grava um registro no model DocumentoTemporario com os dados html do documento que esta sendo criado
     * e depois de gravar,   se tudo ocorrer bem,   ele retornará o id deste registro gravado.
     * Este id  será usado como parametro na geração de um arquivo PDF que será oriundo da modem Documento.
     * A saida será uma chamada para este model (documento)  com um parametro, que é o id retornado deste metodo
     * para gerar o pdf.
     *
     * TODO:  Criar o metodo visualizar  em DocumentoController,  que montará arquivo PDF para visualização.
     * @param Request $request
     * @return bool|mixed
     */
    public function gravaVisualizacao(Request $request)
    {
        #gravar a receita temporaria  na model Documento_temporario
        $documentoTemporario                    = new DocumentoTemporario();
        $documentoTemporario->documento_tipo_id = $request->type_document;
        $documentoTemporario->nome              = date('YmdHis').'_'.Auth::user()->nomeCompleto();
        $documentoTemporario->texto_central     = $request->docHtml;
        $documentoTemporario->status            = 1;
        if($documentoTemporario->save()){
            $id_retorno                         = $documentoTemporario->id;
        };
        if(is_null($id_retorno)){
            return false;
        }else{
            return $id_retorno;
        }
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
