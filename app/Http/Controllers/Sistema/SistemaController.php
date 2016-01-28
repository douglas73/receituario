<?php

namespace App\Http\Controllers\Sistema;

use App\Documento;
use App\Menu;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SistemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userLogout()
    {
        Auth::logout();
        return view('auth.login');
    }

    public function home()
    {
        return view('sistema.home');
    }

    public function menu()
    {
        $menus = Menu::where('menu_id', 0)->orderBy('ordem', 'asc')->get();
        return view('sistema.menu', compact('menus'));
        // return view('sistema.menu');
    }


    public function autorizaUsuario($id)
    {
        return 'ola,  vc autorizou usuario '.$id;
    }

    public function listagem()
    {
        $usuarios = User::orderBy('name', 'asc')->get();
        return view('usuarios.listagem', compact('usuarios'));
    }
}
