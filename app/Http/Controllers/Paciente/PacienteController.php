<?php

namespace App\Http\Controllers\Paciente;
use Carbon\Carbon;
use App\Paciente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PacienteFormRequest;
use App\Http\Controllers\Controller;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::orderBy('nome', 'asc')->get();
        return view('paciente.listagem', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteFormRequest $request)
    {
        //Acertando o padrão da data
        $request['dtnascimento'] = Carbon::createFromFormat('d/m/Y', $request['dtnascimento']);

        if(Paciente::create($request->all()))
        {
            session()->flash('toastr.success', "Confirmado! O paciente  ".$request->get('nome')." foi registrado com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO!  Paciente ".$request->get('nome')." NÃO foi registrado! Por favor repita a operação");
        }
        return redirect('paciente/listagem');
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
        session()->put('idPaciente', $id);

        $paciente       =  Paciente::findOrFail((int) $id);
        $idReg          = $id;
        // dd($medicacao);
        return view('paciente.edicao', compact('paciente','idReg'));

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
        if($id != session("idPaciente"))
        {
            abort(403, 'Violação de parâmetros.');
        }
        $updatePaciente = Paciente::find($id);
        //padroniza data para gravação na base de dados
        $request['dtnascimento'] = Carbon::createFromFormat('d/m/Y', $request['dtnascimento']);

        if($updatePaciente->update($request->all()))
        {
            session()->flash('toastr.success', "Confirmado! O Paciente  ".$request->get('nome')." foi ATUALIZADO com sucesso!");
        }else{
            session()->flash('toastr.error', "ERRO!  O paciente ".$request->get('nome')." NÃO foi ATUALIZADO! Por favor repita a operação");
        }
        session()->forget('idPaciente');
        return redirect('paciente/listagem');
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
