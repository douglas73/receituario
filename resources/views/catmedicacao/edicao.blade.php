@extends('layouts.template')


@section('js_scripts')
    var statusId = {{ $categoria->status ? $categoria->status : '0' }}
    $("#status").val(statusId);

@append

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <!-- right column -->
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edição de Categoria de Medicação</h3>
                        </div><!-- /.box-header -->
                        @include('layouts.template_error_mensages_form_request')
                        @yield('validationMessages')

                        <!-- form start -->
                        <form class="form-horizontal" action="{{URL('catmedicacao/update/'.$idReg)}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Categoria de Medicamento" value="{{ $categoria->nome }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Categoria</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="status" name="status">
                                                <option value=""></option>
                                                <option value="1">Ativo</option>
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
                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </div>
    </div>


@stop