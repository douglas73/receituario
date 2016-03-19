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
@append

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <!-- right column -->
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cadastro de Template para Documentos</h3>
                        </div><!-- /.box-header -->
                        @include('layouts.template_error_mensages_form_request')
                        @yield('validationMessages')

                        <!-- form start -->
                        <form class="form-horizontal" action="{{ URL('documentotemplate/store')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Tipo</label>
                                    <div class="col-sm-10">
                                        <select name="documento_tipo_id" id="" class="form-control">
                                        @foreach($documentoTipo as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr>


                                <div class="form-group">
                                    <label for="posologia" class="col-sm-2 control-label">Cabeçalho</label>
                                    <div class="col-sm-10">
                                        <textarea  id="posologia" name="posologia" class="form-control textarea" rows="3" placeholder="Entre com a posologia do medicamento">{{ old('posologia') }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Imagem de cabeçalho</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="cabecalho_imagem" name="cabecalho_imagem">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label for="posologia" class="col-sm-2 control-label">Corpo</label>
                                    <div class="col-sm-10">
                                        <textarea  id="texto_central" name="texto_central" class="form-control textarea" rows="3" placeholder="Entre com o texto que será o corpo do documento">{{ old('posologia') }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Imagem de corpo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="texto_central_imagem" name="texto_central_imagem">
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

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                   <button type="submit" class="btn btn-info pull-right">Gravar</button>
                            </div><!-- /.box-footer -->

                        </form>
                    </div><!-- /.box -->

            </div>   <!-- /.row -->
        </div>
    </div>


@stop