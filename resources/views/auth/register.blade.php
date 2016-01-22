<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registro de Usuário</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("css/all.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("admin-lte/plugins/iCheck/square/blue.css")}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>

<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <div class="register-box-body">
        <p class="login-box-msg">Registro de novo usuario do sistema</p>
        <div class="text-info">
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>Sucesso!</strong>
                    {!! Session::get('message') !!}
                </div>
            @endif

        </div>
        <form action="{{url('auth/register')}}" method="post">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Primeiro nome">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" class="form-control" placeholder="Sobrenome">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <select id="typeuser_id" name="typeuser_id" class="form-control" placeholder="Escolha o tipo de usuario do sistema">
                    <option value="" disabled selected hidden>Escolha o tipo de Usuário...</option>
                    @foreach($typeUserRegister as $typeUser)
                        <option value="{{$typeUser->id}}">{{ $typeUser->nome }}</option>
                    @endforeach
                </select>
                <span class="glyphicon glyphicon-chevron-down form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" id="email" name="email" class="form-control" placeholder="E-mail"  value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="Senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-digite a senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Eu aceito os <a href="#">termos</a>
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                </div><!-- /.col -->
            </div>
        </form>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="social-auth-links text-justify">
            <p>- OR -</p>

            <p>Este cadastro dependerá de autorização por parte de um administrador do sistema para que sua conta seja validada.</p>

            <p>Uma vez que ete processo ocorra,  você receberá um e-mail informando esta liberação de acesso.</p>

        </div>

        <a href="login.html" class="text-center">I already have a membership</a>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->

@include('layouts.tamplate_js_links')
@yield('js_links')
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
