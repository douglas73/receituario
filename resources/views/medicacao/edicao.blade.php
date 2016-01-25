@extends('layouts.template')


@section('js_scripts')
 var catId ={{ $medicacao->categoria_medicacao_id ? $medicacao->categoria_medicacao_id : '0'  }};
 var statusId = {{ $medicacao->status ? $medicacao->status : '0'   }}
    $("#categoria_medicacao_id").val(catId);
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
                            <h3 class="box-title">Edição de Medicamentos</h3>
                        </div><!-- /.box-header -->
                        @include('layouts.template_error_mensages_form_request')
                        @yield('validationMessages')

                        <!-- form start -->
                        <form class="form-horizontal" action="{{URL('medicacao/update/'.$idReg)}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="categoria_medicacao_id" class="col-sm-2 control-label">Categoria</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="categoria_medicacao_id" name="categoria_medicacao_id">
                                          <option value=""></option>
                                            @foreach($categorias as $categoria)
                                                <option value="{!! $categoria->id !!}">{!! $categoria->nome !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Medicamento" value="{{ $medicacao->nome }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="posologia" class="col-sm-2 control-label">Posologia</label>
                                    <div class="col-sm-10">
                                        <textarea  id="posologia" name="posologia" class="form-control" rows="3" placeholder="Entre com a posologia do medicamento">{{  $medicacao->posologia }}</textarea>
                                    </div>
                                </div>
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
                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </div>
    </div>


@stop