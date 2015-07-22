<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Input;
use Auth;
use Redirect;
use Hash;
use App\Http\Controllers\Controller;
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

    use AuthenticatesAndRegistersUsers;

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
            'username' => 'required|max:255',
            'user_id' => 'required|unique:users',
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

    }

    //authentication part
    public function getLogin()
    {
        //
        return view('auth.login');
    }

    public function postLogin()
    {
        if (Auth::attempt([
            'username' => Input::get('username'),
            'password' =>  Input::get('password')
        ]))
        {
              // Authentication passed...
              $user = Auth::user();

              if($user->status == "Active"){
                  return Redirect::to(strtolower($user->user_type).'/');
              }
              else{
                  Auth::logout();
                  return redirect('/')->withMessage('Account deactivated.');
              }
        }
      return Redirect::back()->withMessage('Invalid credentials.');

    }

    public function getLogout()
    {
        //
        Auth::logout();
        return redirect('/');
    }

    public function getRegister()
    {
        //
        return view('auth.login');
    }

    public function postRegister()
    {
        //
        return view('auth.login');
    }
}
