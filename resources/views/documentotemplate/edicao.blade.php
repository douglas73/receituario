@extends('layouts.template')

@section('head_styles_links')
    <link href="{{ asset("blueimp-file-upload/css/jquery.fileupload.css")}}" rel="stylesheet" type="text/css" />

@append


@section('head_links_scripts')

    {{-- TinyMce --}}
    @include('layouts._tinyMce')

   <!-- Jquery fileupload -->
    <script src="{{ asset ("blueimp-file-upload/js/vendor/jquery.ui.widget.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("blueimp-file-upload/js/jquery.fileupload.js") }}" type="text/javascript"></script>
@append


@section('js_scripts')
    tinymce.init({
    selector: '.textarea',
    language_url : '{{ asset ("tinymce/langs/pt_BR.js") }}'
    });

    var docTipo ={{ $documentoTemplate->tipo->id ? $documentoTemplate->tipo->id : '1'  }};
    var statusId = {{ $documentoTemplate->status ? $documentoTemplate->status : '1'   }}
    $("#documento_tipo_id").val(docTipo);
    $("#status").val(statusId);


    $("#bntTeste").click(function(){
       // $("ps").val() = $("ps").val() = '<p>Este é um teste de inserção de um novo paragrafo </p>';

        //pegar o conteudo do tinyMCE ...
        var conteudo_original = tinyMCE.get('ps').getContent();

        //adiciona mais conteudo o original...
        var data  = conteudo_original + '<br /><span>Minha casa é cada manhã, não procure saber o que sou</span><h1>Os meus passos não é de ninguém</h1><p>vida louca,  vida!</p>';
        tinyMCE.get('ps').setContent(data);
        var teste = tinyMCE.get('ps').getContent();
        alert(teste);
    })

@append

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <!-- right column -->
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edição de Template para Documentos</h3>
                        </div><!-- /.box-header -->
                        @include('layouts.template_error_mensages_form_request')
                        @yield('validationMessages')

                        <!-- form start -->
                        <form class="form-horizontal" action="{{ URL('documentotemplate/update/'.$idReg)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nome" class="col-sm-2 control-label">Tipo</label>
                                            <div class="col-sm-6">
                                                <select name="documento_tipo_id" id="documento_tipo_id" class="form-control">
                                                    @foreach($documentoTipo as $tipo)
                                                        <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="status" class="col-sm-1 control-label">Status</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" selected>Ativo</option>
                                                    <option value="0">Inativo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="padding-top: 8px">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nome" class="col-sm-1 control-label">Nome</label>
                                            <div class="col-sm-10">
                                                <input id="nome" name="nome" type="text" placeholder="Digite o nome do template" class="form-control input-md" value="{!! $documentoTemplate->nome !!}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top: 8px">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="texto_central" class="col-sm-1 control-label">Corpo</label>
                                            <div class="col-sm-10">
                                                <textarea  id="texto_central" name="texto_central" class="form-control textarea" rows="20" placeholder="Entre com o texto que será o template base do documento">{!! $documentoTemplate->texto_central !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-sm-10"></div>
                                    <div class="col-sm-1">
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-info pull-right">Gravar</button>
                                        </div><!-- /.box-footer -->
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10">
                                        <p>Você pode colocar termos que serão substituídos no formulario padrão.</p>
                                        <p>Assim, quando você carregar um Paciente cadasrado,  estes termos serão subistiídos pelos
                                            respectivos campos.</p>
                                        <p>Os termos devem estar em CAIXA ALTA para que o sistema valide</p>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                                <div class="row" style="padding-top: 5px">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4"><p>Paciente:</p></div>
                                </div>

                                <div class="row"  style="padding-top: 5px">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-primary">NOME</span></div>
                                    <div class="col-sm-3">Nome do paciente</div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-primary">IDADE</span></div>
                                    <div class="col-sm-3">Idade do paciente</div>
                                </div>

                                <div class="row"  style="padding-top: 5px">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-primary">ENDEREÇO</span></div>
                                    <div class="col-sm-3">Endereço do paciente</div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-primary"></span></div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <div class="row" style="padding-top: 5px">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4"><p>Médico:</p></div>
                                </div>
                                <div class="row"   style="padding-top: 5px">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-success">MEDICO</span></div>
                                    <div class="col-sm-3">Nome do Medico</div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-success">MEDICOC</span></div>
                                    <div class="col-sm-3">Nome completo do Médico</div>
                                </div>

                                <div class="row"  style="padding-top: 5px">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-success">CRM</span></div>
                                    <div class="col-sm-3">CRM do médico</div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-1"><span class="label label-success">FRASE</span></div>
                                    <div class="col-sm-3">Frase do Médico</div>
                                </div>



                                <hr>
                            </div>

                        </form>
                    </div><!-- /.box -->

            </div>   <!-- /.row -->
        </div>
    </div>


@stop