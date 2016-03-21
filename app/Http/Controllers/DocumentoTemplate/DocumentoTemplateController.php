<?php

namespace App\Http\Controllers\DocumentoTemplate;

use App\DocumentoTemplate;
use App\DocumentoTipo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Traits\PageHeaderTrait;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\DocumentoTemplateFormRequest;

class DocumentoTemplateController extends Controller
{
    use PageHeaderTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Usando a Trait PageHeaderTrait,  retorna o nome do T�tulo da Pagina e sua descri��o no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());
        //Listagem de templates
        $docTemplates = DocumentoTemplate::all();
        return view('documentotemplate.listagem', compact('docTemplates', 'headerInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentoTipo = DocumentoTipo::all();

        /**
         * Usando a Trait PageHeaderTrait,  retorna o nome do T�tulo da Pagina e sua descri��o no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());
        return view('documentotemplate.cadastro', compact('headerInfo', 'documentoTipo'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentoTemplateFormRequest $request)
    {

        /*
        if(Input::hasFile('cabecalho_imagem')){

            $arquivo = Input::file('cabecalho_imagem');
            $arquivo->move('storage', $arquivo->getClientOriginalName());
            echo '<img src="'.asset("storage/".$arquivo->getClientOriginalName()).'"  />';
            echo "<br />Depois apague os arquivos de  public\storage do laravel";
            // return 'Arquivo carregado';
        }
        if(Input::hasFile('texto_central_imagem')){

            $arquivo = Input::file('cabecalho_imagem');
            $arquivo->move('storage', $arquivo->getClientOriginalName());
            echo '<img src="'.asset("storage/".$arquivo->getClientOriginalName()).'"  />';
            echo "<br />Depois apague os arquivos de  public\storage do laravel";
            // return 'Arquivo carregado';
        }
        */



        if(DocumentoTemplate::create($request->all()))
        {
            session()->flash('toastr.success', "Confirmado! O template  foi registrado com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO!  O template NÃO foi registrado! Por favor repita a operação");
        }

        return redirect('documentotemplate/cadastro');




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
        session()->put('idTemplate', $id);

        /**
         * Usando a Trait PageHeaderTrait,  retorna o nome do Título da Pagina e sua descrição no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());

        $documentoTipo           = DocumentoTipo::all();
        $documentoTemplate      =  DocumentoTemplate::findOrFail((int) $id);
        $idReg                  = $id;
        return view('documentotemplate.edicao', compact('documentoTipo','documentoTemplate','idReg','headerInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentoTemplateFormRequest $request, $id)
    {

        if($id != session("idTemplate"))
        {
            abort(403, 'Violação de parâmetros.');
        }

        $updateDocumentoTemplate = DocumentoTemplate::find($id);
        if($updateDocumentoTemplate->update($request->all()))
        {
            session()->flash('toastr.success', "Confirmado! O template foi ATUALIZADO com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO!  o template NÃO foi ATUALIZADO! Por favor repita a operação");
        }
        session()->forget('idTemplate');
        return redirect('documentotemplate/listagem');
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
