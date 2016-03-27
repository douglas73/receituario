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

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Tipo</label>
                                    <div class="col-sm-10">
                                        <select name="documento_tipo_id" id="documento_tipo_id" class="form-control">
                                        @foreach($documentoTipo as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr>


                                <div class="form-group">
                                    <label for="cabecalho" class="col-sm-2 control-label">Cabeçalho</label>
                                    <div class="col-sm-10">
                                        <textarea  id="cabecalho" name="cabecalho" class="form-control textarea" rows="3" placeholder="Entre com Cabeçalho do documento">{!! $documentoTemplate->cabecalho !!}</textarea>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label for="posologia" class="col-sm-2 control-label">Corpo</label>
                                    <div class="col-sm-10">
                                        <textarea  id="texto_central" name="texto_central" class="form-control textarea" rows="3" placeholder="Entre com o texto que será o corpo do documento">{!! $documentoTemplate->texto_central !!}</textarea>
                                    </div>
                                </div>
                                <hr>


                                <div class="form-group">
                                    <label for="rodape" class="col-sm-2 control-label">Rodapé</label>
                                    <div class="col-sm-10">
                                        <textarea  id="rodape" name="rodape" class="form-control textarea" rows="3" placeholder="Entre com o texto que será o rodapé do documento">{!! $documentoTemplate->rodape !!}</textarea>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label for="ps" class="col-sm-2 control-label">Post scriptum(ps)</label>
                                    <div class="col-sm-10">
                                        <textarea  id="ps" name="ps" class="form-control textarea" rows="3" placeholder="Entre com o texto que será o post scriptum do documento">{!! $documentoTemplate->ps !!}</textarea>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="status" name="status">
                                            <option value="1" selected>Ativo</option>
                                            <option value="0">Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                            </div><!-- /.box-body -->
                            <div class="box-footer">

                                   <button type="submit" class="btn btn-info pull-right">Gravar</button>
                                <button type="button" id="bntTeste" name="bntTeste" class="btn btn-default pull-right">Aplicar conteudo</button>
                            </div><!-- /.box-footer -->

                        </form>
                    </div><!-- /.box -->

            </div>   <!-- /.row -->
        </div>
    </div>


@stop