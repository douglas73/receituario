@extends('layouts.template')


@section('js_scripts')

@append

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <!-- right column -->
                <div class="col-md-10">

                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edição de Usuário do Sistema</h3>
                        </div><!-- /.box-header -->
                        @include('layouts.template_error_mensages_form_request')
                        @yield('validationMessages')

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <!-- form start -->
                                <form class="form-horizontal" action="{{URL('medicacao/update/')}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="box-body">


                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Nome</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="">
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            </div>
                                            <label for="lastname" class="col-sm-2 control-label">Sobrenome</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Sobrenome" value="">
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="typeuser_id" class="col-sm-2 control-label">Tipo</label>
                                            <div class="col-sm-10">
                                                <select id="typeuser_id" name="typeuser_id" class="form-control" placeholder="Escolha o tipo de usuario do sistema">
                                                    <option value="" disabled selected hidden>Escolha o tipo de Usuário...</option>
                                                    @foreach($typeUserRegister as $typeUser)
                                                        <option value="{{$typeUser->id}}">{{ $typeUser->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="E-mail"  value="{{ old('email') }}">
                                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label">Senha</label>
                                            <div class="col-sm-4">
                                                <input type="password" id="password" name="password" class="form-control">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            </div>
                                            <label for="password_confirmation" class="col-sm-2 control-label">Confirmação</label>
                                            <div class="col-sm-4">
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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


                            </div>
                            <div class="col-md-1"></div>
                        </div>

                    </div><!-- /.box -->
                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </div>
    </div>


@stop