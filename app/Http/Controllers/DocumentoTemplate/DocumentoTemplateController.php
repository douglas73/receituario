<?php

namespace App\Http\Controllers\DocumentoTemplate;

use App\DocumentoTemplate;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Traits\PageHeaderTrait;
use Illuminate\Support\Facades\Route;

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
         * Usando a Trait PageHeaderTrait,  retorna o nome do Título da Pagina e sua descrição no topo da mesma
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
        /**
         * Usando a Trait PageHeaderTrait,  retorna o nome do Título da Pagina e sua descrição no topo da mesma
         */
        $headerInfo = $this->headerPageName(Route::currentRouteName());
        return view('documentotemplate.cadastro', compact('headerInfo'));

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
