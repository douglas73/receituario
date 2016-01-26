@extends('layouts.template')


@section('js_scripts')
    // $("q").text('DOUGLAS ADAO');
    // $("input[name=q]").val('douglas adão de oliveira');

    BootstrapDialog.show({
    title: 'Say-hello dialog',
    message: 'Hi Apple!'
    });

@append

@section('content')
            <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Pagina Principal do Sistema</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Bemvindo {{ Auth::user()->name }}!


                    <p>{{ Auth::user()->fotoPerfil() }}</p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Launch demo modal 1
                    </button>
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#example-modal">
                        Launch demo modal do template
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="example-modal" id="example-modal">
                        <div class="modal modal-danger">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Modal Danger</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>One fine body&hellip;</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-outline">Save changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div><!-- /.example-modal -->

                </div><!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div><!-- /.box-footer-->
            </div><!-- /.box -->

@stop