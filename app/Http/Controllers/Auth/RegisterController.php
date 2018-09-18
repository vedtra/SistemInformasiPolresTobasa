<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function store(Request $request){               
        $input = $request->all();
        if($username = DB::table('users')->where('username' , $input['username'])->first()){
            return redirect()->back()->with('info','We are so sorry :( .Username is exists. Please choose another username');
        }else{
        User::create(['username' => $input['username'], 'password' => bcrypt($input['password']),'role' => $input['role']])->id;
        return redirect()->back()->with('info','Registrasi berhasil dilakukan. Silahkan login');
        }
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
            'username' => 'required|max:20|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|max:255',
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
            'password' => bcrypt($data['password']),
            'username' => $data['username'],
            'role' => $data['role'],
        ]);
    }
}
