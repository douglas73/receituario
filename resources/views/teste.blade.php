@extends('layouts.template')

@section('head_links_scripts')
    {{-- TinyMce --}}
    @include('layouts._tinyMce')
@append


@section('js_scripts')
    tinymce.init({
    selector: '.textarea',
    language_url : '{{ asset ("tinymce/langs/pt_BR.js") }}'
    });

    $('#image').cropper({
    //aspectRatio: 16 / 9,
    crop: function(e) {
    // Output the result data for cropping image.
    console.log(e.x);
    console.log(e.y);
    console.log(e.width);
    console.log(e.height);
    console.log(e.rotate);
    console.log(e.scaleX);
    console.log(e.scaleY);
    }
    });
@append

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <!-- right column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Formulario para teste de funcionalidades</h3>
                        </div><!-- /.box-header -->

                                <!-- form start -->
                        <form class="form-horizontal" action="{{URL('medicacao/store')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">



                                <div class="form-group">
                                    <label for="imagem" class="col-sm-2 control-label">Imagem</label>
                                    <div class="col-sm-10">
                                        <div>
                                            <img id="image" src="{!! asset("img/aaabebe.jpg") !!}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Medicamento" value="{{ old('nome') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="posologia" class="col-sm-2 control-label">Posologia</label>
                                    <div class="col-sm-10">
                                        <textarea  id="posologia" name="posologia" class="form-control textarea" rows="3" placeholder="Entre com a posologia do medicamento">{{ old('posologia') }}</textarea>
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