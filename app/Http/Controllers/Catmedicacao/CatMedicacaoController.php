<?php

namespace App\Http\Controllers\Catmedicacao;

use App\Medicacao;
use App\CatMedicacao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CatMedicacaoFormRequest;
use App\Http\Controllers\Controller;

class CatMedicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catmedicacao = CatMedicacao::orderBy('nome', 'asc')->get();

        return view('catmedicacao.listagem', compact('catmedicacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catmedicacao.cadastro');

        // dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatMedicacaoFormRequest $request)
    {
        $dados = $request->all();

        $dados['nome'] = strtoupper($request->nome);
        //dd($dados);
        if(CatMedicacao::create($dados))
        {
            session()->flash('toastr.success', "Confirmado! A categoria  ".$request->get('nome')." foi gravada com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO!  A categoria  ".$request->get('nome')." NÃO foi registrada! Por favor repita a operação");
        }
        return redirect('catmedicacao/listagem');
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
        session()->put('idCatMedicacao', $id);

        $categoria      =  CatMedicacao::findOrFail((int) $id);
        $idReg          = $id;
        return view('catmedicacao.edicao', compact('categoria','idReg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\EdicaoCatMedicacaoFormRequest $request, $id)
    {

        if($id != session("idCatMedicacao"))
        {
            abort(403, 'Violação de parâmetros.');
        }

        $updateCatMedicacao = CatMedicacao::find($id);
        if($updateCatMedicacao->update($request->all()))
        {
            session()->flash('toastr.success', "Confirmado! A categoria do medicamento  ".$request->get('nome')." foi ATUALIZADO com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO! A Categoria do  Medicamento ".$request->get('nome')." NÃO foi ATUALIZADO! Por favor repita a operação");
        }
        // session()->forget('idCatMedicacao');
        return redirect('catmedicacao/listagem');
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
