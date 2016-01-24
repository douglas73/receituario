<?php

namespace App\Http\Controllers\Sistema;

use App\Menu;
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
        //dd(Auth::user()->tipo->nome);
        return view('sistema.home');
    }

    public function menu()
    {
        $menus = Menu::where('menu_id', 0)->orderBy('ordem', 'asc')->get();
        return view('sistema.menu', compact('menus'));
        // return view('sistema.menu');
    }


}
