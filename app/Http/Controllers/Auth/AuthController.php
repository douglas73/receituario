<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request; //usardo para fazer o Request
use App\User;
use Validator;
use Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin(Request $request)
    {
        // DB::enableQueryLog();
        if (Auth::attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                    //  'active' => 1
                ]
        )) {
            //Grava mensagem de boas vindas na sessão....
            session()->flash('toastr.info', "Usuário ".Auth::user()->name." logado com sucesso!");
            // Authentication passed...
            return redirect()->intended('home');
        }else{
           // dd(DB::getQueryLog());
            $rules = [
                'email'     => 'required|email',
                'password'  => 'required'
            ];

            $messages = [
                'email.required'    => 'O campo E-mail é obrigatório',
                'email.email'       => 'O campo e-mail esta em um formatio inválido (Não é um e-mail)',
                'password.required' => 'O campo senha é obrigatório'
            ];

            $validator = Validator::make($request->all(),$rules,$messages);

            return redirect('auth/login')
                ->withErrors($validator)
                ->withInput()
                ->with('messages', 'Erro ao iniciar sessão');
        }
    }

    public function postRegister(Request $request){

        $rules = [
            'name' => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
            'lastname' => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:18|confirmed',
            'typeuser_id' => 'required',
        ];
        $messages = [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres de comprimento',
            'name.max' => 'O campo nome deve ter no máximo 16 caracteres de comprimento',
            'name.regex' => 'O campo nome só deve conter letras(acentuadas ou não)',
            'email.required' => 'O campo e-mail é obrigatório',
            'typeuser_id.required' => 'O Tipo de usuário do sistem é obrigatório',
            'email.email' => 'O formato do campo e-mail esta incorreto',
            'email.max' => 'O tamanho máximo do campo e-mail é de 255 caracteres',
            'email.unique' => 'Este e-mail ja existe na nossa base de dados',
            'password.required' => 'O campo senha é obrigatóri',
            'password.min' => 'O campo senha aceita no mínimo 6 caracteres',
            'password.max' => 'O campo senha aceita no máximo 18 caracteres',
            'password.confirmed' => 'O campo senha se sua confirmação não coincidem',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return redirect("auth/register")
            ->withErrors($validator)
            ->withInput();
        }else{
            $user = new User;
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->typeuser_id = $request->typeuser_id;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->remember_token = str_random(100);
            $user->confirm_token = str_random(100);
            $user->save();

           return redirect("auth/register")
            ->with("message", "<p>Usuário ".$request->name." cadastrado com sucesso!</p>");
        }
    }

    protected $redirectTo = '/douglas';
}
