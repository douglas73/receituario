<?php

namespace App\Http\Controllers\Medicacao;

use App\CatMedicacao;
use App\Medicacao;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Session;
// use App\Http\Requests;
use App\Traits\PageHeaderTrait;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\MedicacaoFormRequest;
use App\Http\Requests\EdicaoMedicacaoFormRequest;
use App\Http\Controllers\Controller;



class MedicacaoController extends Controller
{
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
         * Usando a Trait PageHeaderTrait,  retorna o nome do Título da Pagina e sua descrição no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());
        $medicacao = Medicacao::orderBy('nome', 'asc')->get();
        return view('medicacao.listagem', compact('medicacao','headerinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * Usando a Trait PageHeaderTrait,  retorna o nome do Título da Pagina e sua descrição no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());
        $categorias  = CatMedicacao::orderBy('nome', 'asc')->get();
        // dd(Route::currentRouteName());

        return view('medicacao.cadastro', compact('categorias','headerInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicacaoFormRequest $request)
    {
        if(Medicacao::create($request->all()))
        {
            session()->flash('toastr.success', "Confirmado! O medicamento  ".$request->get('nome')." foi registrado com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO!  Medicamento ".$request->get('nome')." NÃO foi registrado! Por favor repita a operação");
        }
        return redirect('medicacao/listagem');

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

        // session(['Edicao' => 'Douglas']);
        session()->put('idMedicacao', $id);

        /**
         * Usando a Trait PageHeaderTrait,  retorna o nome do Título da Pagina e sua descrição no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());

        $categorias     = CatMedicacao::all();
        $medicacao      =  Medicacao::findOrFail((int) $id);
        $idReg          = $id;
        return view('medicacao.edicao', compact('categorias','medicacao','idReg','headerInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EdicaoMedicacaoFormRequest $request, $id)
    {
        /**
         * Usando a Trait PageHeaderTrait,  retorna o nome do Título da Pagina e sua descrição no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());

        if($id != session("idMedicacao"))
        {
            abort(403, 'Violação de parâmetros.');
        }

        $updateMedicacao = Medicacao::find($id);
        if($updateMedicacao->update($request->all()))
        {
            session()->flash('toastr.success', "Confirmado! O medicamento  ".$request->get('nome')." foi ATUALIZADO com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO!  Medicamento ".$request->get('nome')." NÃO foi ATUALIZADO! Por favor repita a operação");
        }
        session()->forget('idMedicacao');
        return redirect('medicacao/listagem', compact('headerInfo'));
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
