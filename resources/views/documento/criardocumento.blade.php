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
@append

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Montagem de Documento</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" title="Miniminiza esta sessão"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="row">
                                <div class="col-lg-4"><label for="">Tipo de Documento:</label></div>
                                <div class="col-lg-8">
                                    <select name="tipo_documento" id="documento_tipo" class="form-control">
                                        <option value="0">Receita Médica</option>
                                        <option value="1">Dispensa Médica</option>
                                        <option value="2">Atestado</option>
                                        <option value="3">Pedido de Exames</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 5px">
                                <div class="col-lg-4"><label for="">Template base:</label></div>
                                <div class="col-lg-8">
                                    <select name="template" id="template" class="form-control">
                                        <option value="0">Template padrão</option>
                                        <option value="1">Template 001</option>
                                        <option value="2">Template 002</option>
                                        <option value="3">Template 002 alterado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-body">

                                <a class="btn btn-app" title="Carregar Paciente" alt="Carregar Paciente">
                                    <span class="badge bg-teal">1125</span>
                                    <i class="fa fa-user"></i>Carregar Paciente
                                </a>
                                <a class="btn btn-app" title="Carregar dados do Paciente" alt="Carregar dados do Paciente">
                                    <i class="fa fa-user"></i><i class="fa fa-book"></i>
                                </a>
                                <a class="btn btn-app bg-light-blue-gradient">
                                    <span class="badge bg-red-gradient">Novo</span>
                                    <i class="fa fa-save"></i> Gravar
                                </a>
                                <a class="btn btn-app bg-teal-gradient" title="Visualizar documento" alt="Visualizar documento">
                                    <i class="fa fa-eye"></i> Visualizar
                                </a>

                                <a class="btn btn-app bg-green-gradient" title="Imprimir documento" alt="Imprimir documento">
                                    <i class="fa fa-print"></i> Imprimir
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><span class="badge bg-blue-gradient">1</span> Cabeçalho</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <textarea name="" id="" cols="30" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-block btn-social  btn-default">
                                <i class="fa fa-clipboard"></i> Dados padrão
                            </a>
                            <a class="btn btn-block btn-social btn-warning">
                                <i class="fa fa-angle-double-up"></i> Inverte seleção
                            </a>
                            <a class="btn btn-block btn-social btn-info">
                                <i class="fa fa-chain-broken"></i> Outra função
                            </a>
                        </div>
                    </div>
                </div><!-- /.box-body -->

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><span class="badge bg-blue-gradient">2</span> Texto Central</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <textarea name="" id="" cols="30" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-block btn-social  btn-default">
                                <i class="fa fa-clipboard"></i> Dados padrão
                            </a>
                            <a class="btn btn-block btn-social btn-warning">
                                <i class="fa fa-angle-double-up"></i> Inverte seleção
                            </a>
                            <a class="btn btn-block btn-social btn-info">
                                <i class="fa fa-chain-broken"></i> Outra função
                            </a>
                        </div>
                    </div>
                </div><!-- /.box-body -->

            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><span class="badge bg-blue-gradient">4</span> Rodapé</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <textarea name="" id="" cols="30" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-block btn-social  btn-default">
                                <i class="fa fa-clipboard"></i> Dados padrão
                            </a>
                            <a class="btn btn-block btn-social btn-warning">
                                <i class="fa fa-angle-double-up"></i> Inverte seleção
                            </a>
                            <a class="btn btn-block btn-social btn-info">
                                <i class="fa fa-chain-broken"></i> Outra função
                            </a>
                        </div>
                    </div>
                </div><!-- /.box-body -->

            </div>

        </div>
    </div>








@stop