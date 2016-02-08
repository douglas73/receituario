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

    public function userUpdate(Request $request, $id, $vartipo = null)
    {
        //Pegar o ultimo caracter da string retornada codificada em base64
        $var= base64_decode($vartipo);
        $retorno = substr($var, -1); //Se for 1,  é atualização de Profile,  2 é atualização de usuario

        if($retorno == '2'){
            $redirect = "sistema/edituser/".$id;
            $typeUser_rules = 'required';
            $status_rules   = 'required';

            if($id != session("idEdit"))
            {
                abort(403, 'Violação de parâmetros.');
            }

        }else{
            $redirect = "sistema/profile";
            $typeUser_rules = '';
            $status_rules   = '';
        }
        /**
         * Buscar pelo usuario do id de retorno para validar se alguns dados ja gravados são iguais ou diferentes
         * do atual.
         */
        $user_confirmation = User::find($id);
        /**
         * Se o usuario esta alterando seu e-mail,  vamos reficar se o que ele esta alterando é diferente do atual
         *  e se não for,   verificar se ja não existe,  adicionando a regra de unique. Caso contrario, retira esta regra.
         */
        if($user_confirmation->email != $request->email){
            $e_mail_rules = 'required|email|max:255|unique:users,email';
        }else{
            $e_mail_rules = 'required|email|max:255';
        }


        $rules = [
            'name' => 'required|min:3|max:20|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
            'lastname' => 'required|min:3|max:20|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
            'email' => $e_mail_rules,
            'password' => 'min:6|max:18|confirmed',
            'typeuser_id' => $typeUser_rules,
            'status' => $status_rules,

        ];
        $messages = [
            'name.required' => 'O campo Nome é obrigatório',
            'lastname.required' => 'O campo sobrenome é obrigatório',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres de comprimento',
            'name.max' => 'O campo nome deve ter no máximo 20 caracteres de comprimento',
            'lastname.min' => 'O campo sobrenome deve ter no mínimo 3 caracteres de comprimento',
            'lastname.max' => 'O campo sobrenome deve ter no máximo 20 caracteres de comprimento',
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
            return redirect($redirect)
                ->withErrors($validator)
                ->withInput();
        }else{
            $user = User::find($id);
            if($request->password != ""){
                $request['password']    = bcrypt($request->password);
                $user->password = $request->password;
            }
            $user->name                 = $request->name;
            $user->lastname             = $request->lastname;
            $user->email                = $request->email;

            if($retorno == '2'){
                $user->typeuser_id      = $request->typeuser_id;
                $user->status           = $request->status;

            }

            if($user->save()){
                session()->flash('toastr.success', "Sucesso! O perfil de  ".$request->get('name')." foi ATUALIZADO com sucesso!");
                if($retorno == '2'){
                    return redirect("usuarios/listagem");
                }else{
                    return redirect("home");
                }

            }else{
                session()->flash('toastr.error', "ERRO!  O perfil ".$request->get('name')." NÃO foi ATUALIZADO! Por favor repita a operação");
                if($retorno == '2'){
                    return redirect("usuarios.listagem");
                }else{
                    return redirect("sistema/profile");
                }
            }
        }


    }

    function edituser($id)
    {
        $usuario = User::findOrFail($id);
        $typeUserRegister = TypeUser::all();
        $idupdateuser = $id;
        /**
         * Grava na sessão idEdit o id enviado originalmente para edição.   caso o operador(espertinho) altere o action
         * do formulario ante de colocando um id de usuário diferente   em :
         * http://localhost/receituario/public/sistema/profile/{id do usuario}/MjAxNi0wMi0wNSAwMDowMDowMDI3NTIy por
         * exemplo, no método userUpdate do controller SistemaController, será verificado se esta sessão é igual a
         * que foi retornada no request.  e se não for,  aborta a operação com aviso Abort();
         */
        session()->put('idEdit', $id);
        return view('sistema/edituser', compact('typeUserRegister','usuario','idupdateuser'));
    }

    function userstatus(Request $request)
    {
        /**
         * ValorDecodificado pega o dado enviado pelo ajax da view Listagem(usuário) que foi enviada codificada em
         * base64 e decodifica
         */
        $valorDecodificado = base64_decode($request->parametro);
        /**
         * A variavel criada, pega somente os ultimos 4 digitos depois do valor retornado, que é o id do usuario
         */
        $varsessao =substr(explode(':',$valorDecodificado)[2], 6,10);
        /**
         * Localizado então o usuário e verificamos seu status no sistema
         */
        $usuario = User::find((int) $varsessao);

        /**
         * Grava na sessão, userIdChangePermission o id do usuario,  para que na proxa ação,   se for alterar permissão
         * O id esteja disponível por sessão,  que será esquecida logo depois a alteração de permissão
         */
        session()->put('userIdChangePermission', $usuario->id);

        /**
         * REtornandos este estado como resposta para o ajax.
         */
        if($usuario->status == 1){
            $resposta['status'] = "Habilitado";
        }else{
            $resposta['status'] = "Bloqueado";
        }

        $resposta['usuario'] = $usuario->name.' '.$usuario->lastname;

        // $resposta->toJson();

        return json_encode($resposta);
    }

    //cp ->  changePermission
    function cp()
    {
        $idUser = session('userIdChangePermission');
        $usuario = User::find((int) $idUser);
        if($usuario->status == 1){
            $usuario->status = 0;
            $retorno = 'Usuário '.$usuario->name.' '.$usuario->lastname.'  foi bloqueado no sistema!';
        }else{
            $usuario->status = 1;
            $retorno = 'Usuário '.$usuario->name.' '.$usuario->lastname.'  foi desbloqueado no sistema!';
        }
        $usuario->save();

        session()->forget('userIdChangePermission');
        return $retorno;
    }

}
