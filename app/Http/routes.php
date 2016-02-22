<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# Rota de Login para pagina principal do sistema, se nõo estiver logada,  carrega login
Route::get('/', ['as' => 'home', 'uses' => 'Sistema\SistemaController@home']);
# Rota para pagina principal do sistema
Route::get('home', ['as' => 'home', 'uses' => 'Sistema\SistemaController@home']);

Route::get('menu', ['as' => 'menu', 'uses' => 'Sistema\SistemaController@menu']);

# Rota para registro de Novos usuários no Sistema
Route::get('registro', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);





/**
 * Inicio das rotas  de testes #################################################################
 */
/**
 *   esta Rota exibe uma pagina com os icones possiveis para inclusão no template além de exibir as
 *   funcionalidades do templates
 */

Route::get('douglas', function () {
    // dd(bcrypt("123"));
    $user = Auth::user();
    return view('teste_template', compact('user'));
});

Route::get('admin', function () {
    return view('admin_template');
});


Route::get('teste', function(){
   return view('teste');
});


Route::get('pdf', function(){
    $medicacao = App\Medicacao::orderBy('nome', 'asc')->get();
    $mpdf = new mPDF('',    // mode - default ''
         '',    // format - A4, for example, default ''
         0,     // font size - default 0
         '',    // default font family
         15,    // margin_left
         15,    // margin right
         16,     // margin top
         16,    // margin bottom
         9,     // margin header
         9,     // margin footer
         'L');  // L - landscape, P - portrait


   //  $mpdf->WriteHTML('<p>Hallo World</p>');
    $mpdf->WriteHTML(view('medicacao.listagem', compact('medicacao'))->render());
    $mpdf->Output();
    return 'Pronto';
});

/**
 * Fim das rotas  de testes #################################################################
 */


Route::get('principal', ['middleware' => 'auth', function() {
    return view('teste');
}]);

// Authentication routes...
 Route::get('auth/login', 'Auth\AuthController@getLogin');
 Route::post('auth/login', 'Auth\AuthController@postLogin');
 // Route::get('auth/logout', 'Auth\AuthController@userLogout');
Route::get('logout', ['as' => 'sistema.logout', 'uses'=>'Sistema\SistemaController@userLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//autorizar usuarios
Route::get('sistema/autorizausuario/{id}', ['as' => 'sistema.userauthorize', 'uses' => 'Sistema\SistemaController@autorizaUsuario']);
//Listagem para usuarios para autorização
Route::get('usuarios/listagem', ['as' => 'usuarios.listagem', 'uses' => 'Sistema\SistemaController@listagem']);

//Atualizar Perfil
Route::post('sistema/profile/{id}/{tuser}',             ['as' => 'sistema.profile', 'uses' => 'Sistema\SistemaController@userUpdate']);
// Route::post('sistema/profile/{id}/{tuser}',     ['as' => 'sistema.edituser',     'uses' => 'Sistema\SistemaController@edituser']);

######################################
# Sistema
######################################
Route::group(['prefix' => 'sistema'], function () {
    Route::get('profile',           ['as' => 'sistema.profile',     'uses' => 'Sistema\SistemaController@profile']);
    Route::get('edituser/{id}',     ['as' => 'sistema.edituser',     'uses' => 'Sistema\SistemaController@edituser']);
    Route::post('userstatus',       ['as' => 'sistema.userstatus',     'uses' => 'Sistema\SistemaController@userstatus']);
    Route::post('cp',               ['as' => 'sistema.cp',     'uses' => 'Sistema\SistemaController@cp']);
});

######################################
# Medicamentos
######################################
Route::group(['prefix' => 'medicacao'], function () {
    Route::get('listagem',      ['as' => 'medicacao.index',     'uses' => 'Medicacao\MedicacaoController@index']);
    Route::get('cadastro',      ['as' => 'medicacao.create',    'uses' => 'Medicacao\MedicacaoController@create']);
    Route::post('store',        ['as' => 'medicacao.store',     'uses' => 'Medicacao\MedicacaoController@store']);
    Route::get('edit/{id}',     ['as' => 'medicacao.edit',      'uses' => 'Medicacao\MedicacaoController@edit']);
    Route::post('update/{id}',  ['as' => 'medicacao.update',    'uses' => 'Medicacao\MedicacaoController@update']);

});

######################################
# Categoria de Medicamentos
######################################
Route::group(['prefix' => 'catmedicacao'], function () {
    Route::get('listagem',      ['as' => 'catmedicacao.index',     'uses' => 'Catmedicacao\CatMedicacaoController@index']);
    Route::get('cadastro',      ['as' => 'catmedicacao.create',    'uses' => 'Catmedicacao\CatMedicacaoController@create']);
    Route::post('store',        ['as' => 'catmedicacao.store',     'uses' => 'Catmedicacao\CatMedicacaoController@store']);
    Route::get('edit/{id}',     ['as' => 'catmedicacao.edit',      'uses' => 'Catmedicacao\CatMedicacaoController@edit']);
    Route::post('update/{id}',  ['as' => 'catmedicacao.update',    'uses' => 'Catmedicacao\CatMedicacaoController@update']);
});

######################################
# Categoria de Pacientes
######################################
Route::group(['prefix' => 'paciente'], function () {
    Route::get('listagem',      ['as' => 'paciente.index',     'uses' => 'Paciente\PacienteController@index']);
    Route::get('cadastro',      ['as' => 'paciente.create',    'uses' => 'Paciente\PacienteController@create']);
    Route::post('store',        ['as' => 'paciente.store',     'uses' => 'Paciente\PacienteController@store']);
    Route::get('edit/{id}',     ['as' => 'paciente.edit',      'uses' => 'Paciente\PacienteController@edit']);
    Route::post('update/{id}',  ['as' => 'paciente.update',    'uses' => 'Paciente\PacienteController@update']);
});
