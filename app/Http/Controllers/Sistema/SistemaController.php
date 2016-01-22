<?php

namespace App\Http\Controllers\Sistema;

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


}
