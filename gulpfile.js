var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var bowerDir = 'resources/assets/bower_components/';
// mix.sass('app.scss');
elixir(function (mix) {
    //Copia de diret�rios
    mix.copy(bowerDir + 'AdminLTE', 'public/admin-lte');
    mix.copy(bowerDir + 'bootstrap/fonts', 'public/fonts');
    mix.copy(bowerDir + 'font-awesome/fonts', 'public/fonts');
    mix.copy(bowerDir + 'Ionicons/fonts', 'public/fonts');
    mix.copy(bowerDir + 'Ionicons', 'public/ionicons');
    mix.copy(bowerDir + 'datatables/media', 'public/media');
    mix.copy(bowerDir + 'tinymce', 'public/tinymce');
    mix.copy(bowerDir + 'cropper', 'public/cropper');

    //Css
    mix.copy(bowerDir + 'bootstrap/dist/css/bootstrap.css', 'public/css/bootstrap.css');
    mix.copy(bowerDir + 'font-awesome/css/font-awesome.css', 'public/css/font-awesome.css');
    mix.copy(bowerDir + 'Ionicons/css/ionicons.css', 'public/css/ionicons.css');

    mix.copy(bowerDir + 'font-awesome', 'public/font-awesome'); //verificar se tem que ficar nesta pasta mesmo...

    mix.copy(bowerDir + 'toastr/toastr.min.css', 'public/css/toastr.min.css');
    mix.copy(bowerDir + 'cropper/dist/cropper.css', 'public/css/cropper.css');


    //Js
    mix.copy(bowerDir + 'jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
    mix.copy(bowerDir + 'bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
    mix.copy(bowerDir + 'Chart.js/Chart.js', 'public/js/Chart.js');
    mix.copy(bowerDir + 'toastr/toastr.min.js', 'public/js/toastr.min.js');
    mix.copy(bowerDir + 'cropper/dist/cropper.js', 'public/js/cropper.js');

   //  mix.copy(bowerDir + 'toastr/toastr.min.js');
    //mix.copy(bowerDir + 'datatables/media/js/dataTables.bootstrap.min.js', 'public/js/dataTables.bootstrap.min.js');

    // mix.sass('app.scss');
    /**
     * Aqui o diretorio raiz, é o public/assets
     */
    mix.styles([
        'bootstrap.css',
        'font-awesome.css',
        'ionicons.css',
        'toastr.min.css',
        'cropper.css'

    ],'public/css/all.css','public/css');

     mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        'Chart.js',
        'toastr.min.js',
        'cropper.js'
    ],'public/js/all.js','public/js');


});
