{{ $msgSuccess      = null }}
{{ $msgError        = null }}
{{ $msgInfo         = null }}
{{ $msgWarning      = null }}
@if (Session::has('toastr.success'))
    {{ $msgSuccess.= session('toastr.success') }}
@endif
@if (Session::has('toastr.error'))
    {{ $msgError.= session('toastr.error') }}
@endif

@if (Session::has('toastr.info'))
    {{ $msgInfo.= session('toastr.info') }}
@endif
@if (Session::has('toastr.warning'))
    {{ $msgWarning.= session('toastr.warning') }}
@endif

@section('js_scripts')

    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-bottom-left",
    "preventDuplicates": false,

    }

    //variaveis de mensagens de retorno
    var mSuccess    = '{{ $msgSuccess }}';
    var mError      = '{{ $msgError }}';
    var mInfo       = '{{ $msgInfo }}';
    var mWarning    = '{{ $msgWarning }}';
    //Mensagem de sucesso
    if(mSuccess !== '')
    {
        toastr.success(mSuccess);
    }
    //Mensagem de Erro
    if(mError !== '')
    {
        toastr.error(mError);
    }
    if(mInfo !== '')
    {
        toastr.info(mInfo);
    }

    if(mWarning !== '')
    {
        toastr.warning(mWarning);
    }

@append
