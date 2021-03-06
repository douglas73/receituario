@extends('layouts.template')

@section('head_styles_links')


@append


@section('head_links_scripts')

    {{-- TinyMce --}}
    @include('layouts._tinyMce')
@append


@section('js_scripts')
    tinymce.init({
    selector: '.textarea',
    language_url : '{{ asset ("tinymce/langs/pt_BR.js") }}'
    });

    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':'{!! csrf_token() !!}'
        }
    });

    $("#documento_tipo").change(function(){
        var item = $(this).val();

        $("#template").empty();
        $("#template").html('<option value="">Carregando...</option>');

        $.ajax({
            method: 'POST',
            url:'{{ route('ajax.preencheLstTemplate') }}',
            data: {
            dtid:item
        }
        }).done(function(data) {
                console.log('Inicializando......');
                console.log(data);
                var content = tinyMCE.get('texto_central').getContent();
                if(data !== ""){
                        $("#template").empty();
                        $("#template").append(data);
                    }
                return false;
        });
    });

    $("#lstCategoriaMedicacao").change(function(){
        $("#lstMedicacao").empty();
        $("#lstMedicacao").html('<option value="">Carregando...</option>');
        $("#panel_posologia").hide('slow');
        $("#descricao_posologia").html('');
        var item = $(this).val();
        $.ajax({
                method: 'POST',
                url:'{{ route('ajax.preencheLstMedicamento') }}',
                data: {
                dmid:item
            }
            }).done(function(data) {
                console.log('Inicializando......');
                console.log(data);

                if(data !== ""){
                    $("#lstMedicacao").empty();
                    $("#lstMedicacao").append('<option value="" selected></option>' + data);
                }else{
                    $("#lstMedicacao").html('<option value="">| NÃO FOI ENCONTRDA NENHUMA MEDICAÇÃO PARA ESTA CATEGORIA |</option>');
                }
            return false;
        });
    });

    $("#lstMedicacao").change(function(){
        var item = $(this).val();
        $("#panel_posologia").hide('slow');
        $("#descricao_posologia").html('');
        $.ajax({
            method: 'POST',
            url:'{{ route('ajax.preenchePosologia') }}',
            data: {
            dPid:item
        }
        }).done(function(data) {
            console.log('Inicializando......');
            console.log(data);
            $("#panel_posologia").show('slow');
            $("#descricao_posologia").html(data);
            return false;
        });
           // alert($("#lstMedicacao").val());
            return false;
    });



    function display_and_close_tools()
    {
        /*
        $("#box_ferramentas").removeClass('collapsed-box');
        setTimeout(function(){
            $("#box_ferramentas").addClass('collapsed-box');
        },1000);
        */

    }

    $("#bntCarrega_template").click(function(e){
        e.preventDefault();
        if($("#documento_tipo").val() !== '' && $("#template").val() !== ''){
            var dtype = $("#documento_tipo").val();
            var dtemp = $("#template").val();
            $.ajax({
                method: 'POST',
                url:'{{ route('ajax.carregaTemplate') }}',
                data: {
                doc_type:dtype,
                doctemp:dtemp
            }
            }).done(function(data) {
                // console.log(data);
                tinyMCE.get('texto_central').setContent(data);
                display_and_close_tools();
                return false;
            });
        }else{
            alert('Seu tonto,  faça escolha nos 2 selectboxes');
        }
    });

    $("#bntCarregaPaciente").click(function(e){
        e.preventDefault();
         $("#modalCarregaPaciente").modal();
    });


    $("#bntAddMedicacao").click(function(e){
        e.preventDefault();
        $("#panel_posologia").hide('slow');
        $("#descricao_posologia").html('');
        $("#lstMedicacao").empty();
        $("#lstCategoriaMedicacao").val($("#lstCategoriaMedicacao option:first").val());
        $("#modalCarregaPrescricao").modal();
    });

    $("#bntModalCarregaPaciente").click(function(){
        var paciente = $("#lstPacientes").val();
        console.log(paciente);
        $.ajax({
            method: 'POST',
            url:'{{ route('ajax.carregaPacienteNome') }}',
            data: {
            paciente:paciente
        }
        }).done(function(data) {
            console.log(data);
            $("#nome_paciente_carregado").html(data);
            $("#info_paciente").show('slow');
            return false;
        });
    });
    $("#bntVisualizarDocumento").click(function(e){
        e.preventDefault();

        var tdoc = $("#documento_tipo").val();
        if(tdoc === ""){
            alert('Você deve escolher um tipo de documento antes de continuar');
        }else{
            var text_documento = tinyMCE.get('texto_central').getContent();
            $.ajax({
                method: 'POST',
                url:'{{ route('ajax.setvisualizacao') }}',
                data: {
                docHtml:text_documento,
                type_document:tdoc
            }
            }).done(function(data) {
                console.log(data);
                $("#teste").html(data);

                if($.isNumeric(data)){
                    // window.location = "{{ url('documento/visualizacao') }}" + "/" + data;
                    window.open("{{ url('documento/visualizacao') }}" + "/" + data, "_blank");
                }else{
                    alert('Não é numérico');
                }
                return false;
            });

        }


        // window.location = "{$base_url}" + "qualidade/pop/procedimentos/" + '{$id_segmento}';
    });




    $("#bntCarregaDadosPaciente").click(function(e){
        e.preventDefault();
        $.ajax({
            method: 'POST',
            url:'{{ route('ajax.carregaDadosPaciente') }}',
            dataType: "json"
        }).done(function(data) {
                var P_NOME          = data.p_nome;
                var P_IDENTIDADE    = data.p_identidade;
                var P_NASCIMENTO    = data.p_nascimento;
                var P_CPF           = data.p_cpf;
                var P_SEXO          = data.p_sexo;
                var P_PROFISSAO     = data.p_profissao;
                var P_ESCOLARIDADE  = data.p_escolaridade;

                var text_documento = tinyMCE.get('texto_central').getContent();

                var resultado = text_documento.replace('PACIENTE', '<strong>' + P_NOME + '</strong>');
                var resultado = resultado.replace('NASCIMENTO', P_NASCIMENTO);
                var resultado = resultado.replace('IDENTIDADE', P_IDENTIDADE);
                var resultado = resultado.replace('CPF', P_CPF);
                var resultado = resultado.replace('SEXO', P_SEXO);
                var resultado = resultado.replace('PROFISSAO', P_PROFISSAO);
                var resultado = resultado.replace('ESCOLARIDADE', P_ESCOLARIDADE);

                //Medico
                var resultado = resultado.replace('MEDICO', '<strong>{{ Auth::user()->nomeCompleto() }}</strong>');



                console.log('Resultado com valor substituído: >>>>>> ' + resultado);
                tinyMCE.get('texto_central').setContent(resultado);
                console.log('O retorno foi: ' + data.p_sexo);
                return false;
        });
    });

@append
@section('content')

    <!-- Modal Carrega Paciente-->
    <div class="modal fade" id="modalCarregaPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Carregar Paciente</h4>
                </div>
                <div class="modal-body">
                    <p>Escolha o paciente e clique em carregar.  Seu nome deve aparecer em Paciente Atual.</p>

                    <div class="row">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Paciente</label>
                            <div class="col-sm-10">
                                <select name="lstPacientes" id="lstPacientes" class="form-control">
                                    <option value="">Escolha seu paciente...</option>
                                    @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"  id="bntModalCarregaPaciente">Carregar Paciente</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Carrega Medicação-->
    <div class="modal fade" id="modalCarregaPrescricao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Carregar Medicamento</h4>
                </div>
                <div class="modal-body">
                    <p>Escolha a categoria do Medicamento.  Depois escolha a medicação.</p>

                    <div class="row">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Categoria</label>
                            <div class="col-sm-11">
                                <select name="lstCategoriaMedicacao" id="lstCategoriaMedicacao" class="form-control">
                                    <option value="">Escolha a categoria...</option>
                                    @foreach($medicacaoCategoria as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Medicação:</label>
                            <div class="col-sm-11">
                                <select name="lstMedicacao" id="lstMedicacao" class="form-control">
                                    <option value="">...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 25px">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="panel panel-default" id="panel_posologia" style="display: none">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Posologia a ser aplicada</h3>
                                </div>
                                <div class="panel-body">
                                    <span id="descricao_posologia"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"  id="bntModalCarregaPaciente">Carregar Medicação</button>
                </div>
            </div>
        </div>
    </div>



    <div id="teste"></div>
    <form class="form-horizontal" action="" method="post">
    <div class="row" id="douglas">
        <div class="col-lg-12">
            <div class="box box-danger  box-default">
                <div class="box-header">
                    <h3 class="box-title"><span class="badge bg-blue-gradient">1</span>Tipo de Documento</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" title="Miniminiza esta sessão"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-8">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">

                                <div class="col-lg-5">
                                    <label class="control-label" for="documento_tipo"> Tipo de Documento:</label>
                                    <select name="documento_tipo" id="documento_tipo" class="form-control">
                                        <option value="" selected></option>
                                        @foreach($tiposDocumentos as $tipo)
                                            <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label class="control-label" for="template">Template base:</label>
                                    <select name="template" id="template" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-lg-1">
                                    <div class="box-body">
                                        <a class="btn btn-app bg-light-blue-active" title="Carregar Paciente"
                                           alt="Carregar Paciente" id="bntCarrega_template" name="bntCarrega_template">
                                            <span class="badge bg-green">Carregar</span>
                                            <i class="fa fa-book"></i>Dados do template
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- /.box-body -->

            </div>

        </div>
    </div>
        <div class="row" id="botoes">
            <div class="col-lg-12">
                <div class="box box-warning" id="box_ferramentas">
                    <div class="box-header">
                        <h3 class="box-title"><span class="badge bg-blue-gradient">2</span> Ferramentas</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" title="Miniminiza esta sessão"><i class="fa fa-minus"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-8">
                                <div class="box-body">

                                    <a class="btn btn-app" title="Carregar Paciente" alt="Carregar Paciente"
                                       id="bntCarregaPaciente" name="bntCarregaPaciente">
                                        <span class="badge bg-teal">{{count($pacientes) > 0 ?count($pacientes) : 'Nenhum cadastrado' }}</span>
                                        <i class="fa fa-user"></i>Carregar Paciente
                                    </a>
                                    <a class="btn btn-app" title="Carregar dados do Paciente"
                                       id="bntCarregaDadosPaciente" name="bntCarregaDadosPaciente" alt="Carregar dados do Paciente">
                                        <i class="fa fa-user"></i><i class="fa fa-book"></i>
                                    </a>
                                    <a class="btn btn-app bg-light-blue-gradient">
                                        <span class="badge bg-red-gradient">Novo</span>
                                        <i class="fa fa-save"></i> Gravar
                                    </a>
                                    <a class="btn btn-app bg-teal-gradient" title="Visualizar documento" alt="Visualizar documento" id="bntVisualizarDocumento">
                                        <i class="fa fa-eye"></i> Visualizar
                                    </a>

                                    <a class="btn btn-app bg-green-gradient" title="Imprimir documento" alt="Imprimir documento">
                                        <i class="fa fa-print"></i> Imprimir
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div id="info_paciente"  class="alert alert-warning" style="display: none">
                                    <p><span style="font-stretch: condensed; font-weight: bolder">Paciente atual</span></p>
                                    <p><span><i class="fa fa-fw fa-user text-success"></i></span><span style="font-stretch: extra-condensed; font-weight: bold;" id="nome_paciente_carregado">FULANO DE TAL ALMEIDA JUNIOS</span></p>
                                </div>
                             </div>
                        </div>
                    </div><!-- /.box-body -->

                </div>

            </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title"><span class="badge bg-blue-gradient">3</span> Corpo</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <textarea name="texto_central" id="texto_central" cols="30" rows="20" class="textarea"></textarea>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-app" title="Adicionar Fármaco / Medicação" alt="Adicionar Fármaco / Medicaçã" id="bntAddMedicacao">
                                <span class="badge bg-red-gradient">000</span>
                                <i class="fa fa-medkit"></i> Add Prescrição
                            </a>
                        </div>
                    </div>
                </div><!-- /.box-body -->

            </div>

        </div>
    </div>

    </form>


@stop