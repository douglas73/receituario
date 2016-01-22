@extends('layouts.template')


@section('js_scripts')
    $("q").text('DOUGLAS ADAO');
    $("input[name=q]").val('douglas adão de oliveira');


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
                </div><!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div><!-- /.box-footer-->
            </div><!-- /.box -->

@stop