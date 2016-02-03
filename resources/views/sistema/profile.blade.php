@extends('layouts.template')


@section('js_scripts')
    $("#bntEnablePerfilEdit").click(function(){
        $("#editaPerfil").toggle('slow');
    });

@append

@section('content')

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ Auth::user()->fotoPerfil() }}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ Auth::user()->nomeCompleto() }}</h3>
                        <p class="text-muted text-center">{{ Auth::user()->tipo->nome }}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Criado em:</b> <a class="pull-right">{{ Auth::user()->created_at->format('d/m/Y  H:i:s') }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Ultima atualização</b> <a class="pull-right">{{ Auth::user()->updated_at->format('d/m/Y H:i:s') }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="pull-right">13,287</a>
                            </li>
                        </ul>
                        <button id="bntEnablePerfilEdit" class="btn btn-block btn-primary"><i class="fa fa-pencil margin-r-5"></i>&nbsp;Editar Dados do Perfil</button>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-6">

                <div id="editaPerfil" style="display: block" class="box box-primary">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h3>Edição de dados do Perfil</h3>

                            @include('layouts.template_error_mensages_form_request')
                            @yield('validationMessages')

                            <form action="{{url('sistema/profile/'.Auth::user()->id)}}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group has-feedback">
                                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Primeiro nome">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}" class="form-control" placeholder="Sobrenome">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail"  value="{{ Auth::user()->email }}">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>

                                <div class="row">
                                    <div class="form-group has-feedback">
                                        <div class="col-md-6">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Senha">
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-digite a senha">
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">

                                </div>
                                <div class="row">
                                    <div class="col-xs-8">

                                    </div><!-- /.col -->
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Atualizar dados</button>
                                    </div><!-- /.col -->
                                    <hr>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>




            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->



@stop