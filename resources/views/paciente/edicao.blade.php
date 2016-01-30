@extends('layouts.template')


@section('js_scripts')

 var var_escolaridade = '{{ $paciente->escolaridade }}';
 $("#escolaridade").val(var_escolaridade);

 var var_sexo = '{{ $paciente->sexo }}';
 $("#sexo").val(var_sexo);

 var statusId = '{{ $paciente->status ? $paciente->status : '0'   }}';
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
                            <h3 class="box-title">Edição de Paciente</h3>
                        </div><!-- /.box-header -->
                        @include('layouts.template_error_mensages_form_request')
                        @yield('validationMessages')

                        <!-- form start -->
                        <form class="form-horizontal" action="{{URL('paciente/update/'.$idReg)}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Paciente" value="{{ $paciente->nome }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="dtnascimento" class="col-sm-2 control-label">Data de Nascimento</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="dtnascimento" name="dtnascimento" placeholder="Data do Nascimento" value="{{ $paciente->dtnascimento->format('d/m/Y') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="cpf" class="col-sm-2 control-label">CPF</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="{{ $paciente->cpf  }}">
                                    </div>
                                    <label for="identidade" class="col-sm-2 control-label">Identidade</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="identidade" name="identidade" placeholder="Identidade" value="{{ $paciente->identidade }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sexo" class="col-sm-2 control-label">Sexo</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="sexo" name="sexo">
                                            <option value=""></option>
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                    </div>
                                    <label for="escolaridade" class="col-sm-2 control-label">Escolaridade</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="escolaridade" name="escolaridade">
                                            <option value=""></option>
                                            <option value="analfabeto">Analfabeto</option>
                                            <option value="fundamental">Ensino Fundamental</option>
                                            <option value="medio">Ensino Médio</option>
                                            <option value="superior">Ensino Superior</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="profissao" class="col-sm-2 control-label">Profissão</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Digite a Profissão" value="{{ $paciente->profissao }}">
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