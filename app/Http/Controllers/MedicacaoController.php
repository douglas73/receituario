<?php

namespace App\Http\Controllers;

use App\CatMedicacao;
use App\Medicacao;
use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Requests\MedicacaoFormRequest;
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
        //return '<p>Você esta na home de Cadastro de Medicação</p>';
        $medicacao = Medicacao::orderBy('nome', 'asc')->get();
       // dd($medicacao);

        return view('medicacao.listagem', compact('medicacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias  = CatMedicacao::orderBy('nome', 'asc')->get();
        return view('medicacao.cadastro', compact('categorias'));
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
        //
        $medicacao =  Medicacao::findOrFail($id);
        dd($medicacao);

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
