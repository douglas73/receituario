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



######################################
# Medicamentos
######################################
Route::group(['prefix' => 'medicacao'], function () {
    Route::get('listagem',      ['as' => 'medicacao.index',     'uses' => 'MedicacaoController@index']);
    Route::get('cadastro',      ['as' => 'medicacao.create',    'uses' => 'MedicacaoController@create']);
    Route::post('store',        ['as' => 'medicacao.store',     'uses' => 'MedicacaoController@store']);
    Route::get('edit/{id}',     ['as' => 'medicacao.edit',      'uses' => 'MedicacaoController@edit']);
    Route::post('update/{id}',  ['as' => 'medicacao.update',      'uses' => 'MedicacaoController@update']);

});

######################################
# Categoria de Medicamentos
######################################
Route::group(['prefix' => 'catmedicacao'], function () {
    Route::get('listagem',      ['as' => 'catmedicacao.index',     'uses' => 'CatMedicacaoController@index']);
    Route::get('cadastro',      ['as' => 'catmedicacao.create',    'uses' => 'CatMedicacaoController@create']);
    Route::get('edit/{id}',     ['as' => 'catmedicacao.edit',      'uses' => 'CatMedicacaoController@edit']);
    Route::post('update/{id}',  ['as' => 'catmedicacao.update',    'uses' => 'CatMedicacaoController@update']);
});
