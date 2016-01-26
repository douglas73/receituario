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

@append

@section('content')


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
                            <th width="10%">Situação</th>
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
                                <td><a href="{{ route('sistema.userauthorize', [$usuario->id])  }}"><span class="btn btn-block btn-default" title="Habilitar ou bloquear"><i class="fa fa-key"></i></span></a></td>
                                <td><button class="btn btn-block btn-default" title="Excluir registro"><i class="fa fa-trash-o warning"></i></button></td>
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
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->


        </div>
    </div>

@stop