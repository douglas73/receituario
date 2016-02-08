@extends('layouts.template')

@section('head_links_scripts')
    {{-- Habilitar somente caso exita DataTables --}}
    <link href="{{ asset("media/css/jquery.dataTables.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset ("media/js/jquery.dataTables.js") }}"></script>
@append

@section('js_scripts')

    $("q").text('DOUGLAS ADAO');
    $("input[name=q]").val('douglas adão de oliveira');

    $('#example1').DataTable({
        language: {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                },
                "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
                }
        }
    });

    $(".autorizacao").click(function(event){
        event.preventDefault();
        var Usuario = $(this).data("usuario");

        $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':'{!! csrf_token() !!}'
        }
        });

        $.ajax({
        type: 'post',
        url: '{{ url('sistema/userstatus')}}',
        data: {
            parametro: Usuario
        },
        dataType: "json"
        }).done(function(data){

            $("#myModalLabel").html('<i class="fa fa-user"></i>&nbsp;&nbsp;Permissão de acesso de <strong>' + data.usuario + '</strong>');
            $("#modal_mensagem").html('<p>Atualmente,  o estado da permissão do usuário <strong>' + data.usuario + '</strong> é <strong>'+ data.status +'</strong>!</p>'
                + '<p>Você pode alterar este estado clicando em Executar,  ou apenas em Fechar para sair</p>'
                + '<p>Você deseja alterar a permissão deste usuário? </p>'      );
            $("#saveButton" ).button( "option", "label", "Alterar Permissão" );
            $("#myModal").modal();
            return false;
        });

    });

    $("#saveButton").click(function(){
        $.ajax({
        type: 'post',
        url: '{{ url('sistema/cp')}}',
        data: {
            parametro: 'execute'
        },

        // dataType: "json"
        }).done(function(data){
        // alert(data);
            setTimeout(function(){
                    $("#cancelButton" ).trigger('click');
                    setTimeout(function(){
                        $("#myModalLabel").html('<i class="fa fa-line-chart"></i>&nbsp;&nbsp;&nbsp;&nbsp;Resultado da operação');
                        $("#modal_mensagem").html('<strong>' + data + '</strong>');
                        $("#saveButton" ).hide();
                        $("#myModal").modal();
                        setTimeout(function(){
                            window.location = "{{ url('usuarios/listagem')}}";
                        },3000);
                     },500);
            },900);
        });
    });


@append

@section('content')
        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div id="modal_mensagem" class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button id="cancelButton" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-thumbs-o-down warning"></i>&nbsp;&nbsp;Fechar</button>
                            <button id="saveButton" type="button" class="btn btn-success"><span id="labelSaveButton"><i class="fa fa-thumbs-o-up warning"></i>&nbsp;&nbsp;Executar</span></button>
                        </div>
                    </div>
                </div>
            </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listagem de Usuários / Autorização de acesso</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="5%">Foto</th>
                            <th width="15%">Nome</th>
                            <th width="15%">Sobrenome</th>
                            <th width="15%">Tipo</th>

                            <th width="30%">E-mail</th>
                            <th width="5%">Situação</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td><img src="{{ $usuario->fotoPerfil() }}" class="img-circle" width="50" height="50" alt="" title="" ></td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->lastname }}</td>
                                <td>{{ $usuario->tipo->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td align="center">{!! $usuario->status == 1 ? '<i class="fa fa-unlock text-green"></i>': '<i class="fa fa-lock text-red"></i>'  !!}</td>
                                <td><a href="{{ route('sistema.userauthorize', [$usuario->id])  }}" data-usuario="{{ base64_encode(\Carbon\Carbon::today().rand(1000,9999).$usuario->id) }}" class="autorizacao"><span class="btn btn-block btn-default douglas" title="Habilitar ou bloquear"><i class="fa fa-key"></i></span></a></td>
                                <td><a href="{{ route('sistema.edituser', [$usuario->id])  }}"><span class="btn btn-block btn-primary" title="Editar"><i class="fa fa-edit"></i></span></a></td>
                                <td><button class="btn btn-block btn-danger" title="Excluir registro"><i class="fa fa-trash-o warning"></i></button></td>
                            </tr>
                        @endforeach

                       </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Total: 000</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->


        </div>
    </div>

@stop