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



Route::get('admin', function () {
    return view('admin_template');
});
Route::get('douglas', function () {

    // dd(bcrypt("123"));
    $user = Auth::user();
    return view('teste', compact('user'));
});

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
Route::post('sistema/profile/{id}',['as' => 'sistema.profile', 'uses' => 'Sistema\SistemaController@userUpdate']);


######################################
# Sistema
######################################
Route::group(['prefix' => 'sistema'], function () {
    Route::get('profile',           ['as' => 'sistema.profile',     'uses' => 'Sistema\SistemaController@profile']);
    Route::get('edituser/{id}',     ['as' => 'sistema.edituser',     'uses' => 'Sistema\SistemaController@edituser']);


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
