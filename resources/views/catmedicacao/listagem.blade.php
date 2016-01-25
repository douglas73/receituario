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
                    <h3 class="box-title">Listagem de Categorias de Medicamento</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="60%">Nome da Categoria</th>
                            <th width="30%">Status</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($catmedicacao as $categoria)
                            <tr>
                                <td>{{ $categoria->nome }}</td>
                                <td>{{ $categoria->status == 1 ? 'Ativo' : 'Inativo' }}</td>
                                <td><a href="{{ route('catmedicacao.edit', [$categoria->id])  }}"><span class="btn btn-block btn-default" title="Editar registro"><i class="fa fa-edit"></i></span></a></td>
                                <td><button class="btn btn-block btn-default" title="Excluir registro"><i class="fa fa-trash-o warning"></i></button></td>
                            </tr>
                        @endforeach

                       </tbody>
                        <tfoot>
                        <tr>
                            <th>000 Categorias cadastradas</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
                <div class="row">
                    <div class="col-lg-11">
                        <div class="row">

                            <div class="col-sm-2">
                                <a href="{{ route('catmedicacao.index') }}" class="btn btn-block btn-primary"><i class="fa  fa-backward"></i>&nbsp&nbsp;Retornar </a>
                            </div>
                            <div class="col-sm 4">
                                <div class="pull-right">
                                        <a href="{{ route('catmedicacao.create') }}" class="btn btn-block btn-success"><i class="fa fa-plus-square"></i>&nbsp&nbsp;Nova Categoria </a>
                                </div>
                            </div>


                            </div>
                        </div>

                    </div>

                </div>

        </div>
    </div>

@stop