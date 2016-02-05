<?php

namespace App\Http\Controllers\Sistema;

use App\Documento;
use App\Menu;
use App\TypeUser;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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
        /**
         * TODO....
         *
         * Nome da rota atual
         *
         * USAR para definir classe ativa nos itens de menu.....     Route::currentRouteName()
         *
         */

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

    public function profile()
    {
        return view('sistema.profile');
    }

    public function userUpdate(Request $request, $id)
    {
        /**
         * Buscar pelo usuario do id de retorno para validar se alguns dados ja gravados são iguais ou diferentes
         * do atual.
         */
        $user_confirmation = User::find($id);
        /**
         * Se o usuario esta alterando seu e-mail,  vamos reficar se o que ele esta alterando é diferente do atual
         *  e se não for,   verificar se ja não existe,  adicionando a regra de unique. Caso contrario, retia esta regra.
         */
        if($user_confirmation->email != $request->email){
            $e_mail_rules = 'required|email|max:255|unique:users,email';
        }else{
            $e_mail_rules = 'required|email|max:255';
        }

        $rules = [
            'name' => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
            'lastname' => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
            'email' => $e_mail_rules,
            'password' => 'min:6|max:18|confirmed',
        ];
        $messages = [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres de comprimento',
            'name.max' => 'O campo nome deve ter no máximo 16 caracteres de comprimento',
            'lastname.min' => 'O campo sobrenome deve ter no mínimo 3 caracteres de comprimento',
            'lastname.max' => 'O campo sobrenome deve ter no máximo 16 caracteres de comprimento',
            'name.regex' => 'O campo nome só deve conter letras(acentuadas ou não)',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'O formato do campo e-mail esta incorreto',
            'email.max' => 'O tamanho máximo do campo e-mail é de 255 caracteres',
            'email.unique' => 'Este e-mail ja existe na nossa base de dados',
            // 'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O campo senha aceita no mínimo 6 caracteres',
            'password.max' => 'O campo senha aceita no máximo 18 caracteres',
            'password.confirmed' => 'O campo senha se sua confirmação não coincidem',
        ];

        $dados = $request->all();
        $validator = Validator::make($dados, $rules, $messages);

        if($validator->fails()){
            return redirect("sistema/profile")
                ->withErrors($validator)
                ->withInput();
        }else{
            $user = User::find($id);
            if($request->password != ""){
                $request['password'] = bcrypt($request->password);
                $user->password = $request->password;
            }
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            if($user->save()){
                session()->flash('toastr.success', "Sucesso! O perfil de  ".$request->get('name')." foi ATUALIZADO com sucesso!");
                return redirect("home");
            }else{
                session()->flash('toastr.error', "ERRO!  O perfil ".$request->get('name')." NÃO foi ATUALIZADO! Por favor repita a operação");
                return redirect("sistema/profile");
            }
        }


    }

    function edituser($id)
    {

        //dd($id);
        $usuario = User::findOrFail($id);
        $typeUserRegister = TypeUser::all();
        return view('sistema/edituser', compact('typeUserRegister','usuario'));
    }

}
