<?php

namespace App\Http\Controllers\Documento;

use App\DocumentoTipo;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Traits\PageHeaderTrait;
use Illuminate\Support\Facades\Route;

class DocumentoController extends Controller
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
        $headerInfo         = $this->headerPageName(Route::currentRouteName());

        $tiposDocumentos    = DocumentoTipo::all();
        $pacientes          = Paciente::all();

        return view('documento.criardocumento', compact('headerInfo', 'tiposDocumentos','pacientes'));
    }

    public function exemplo()
    {

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


        $mpdf->WriteHTML('<p>Hallo World</p>');
        $mpdf->WriteHTML(view('documento.docpadrao')->render(),2);
        return $mpdf->Output();
    }


    public function visualizacao($par)
    {

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


        $mpdf->WriteHTML('<p>Hallo World</p>');
        $mpdf->WriteHTML('<p>'.$par.'</p>');
        $mpdf->WriteHTML(view('documento.docpadrao')->render(),2);
        return $mpdf->Output();
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
