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
        return User::create([
            'user_id' => $data['user_id'],
            'username' => $data['username'],
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'department' => $data['department'],
            'job_title' => $data['job_title'],
            'password' => bcrypt($data['password']),
            'status' => 'Active',
            'user_type' => 'Processor'
        ]);
    }

    //authentication part
    public function getLogin()
    {
        //
        return view('auth.login');
    }

    public function postLogin()
    {
        if (Auth::attempt(['user_id' => '201201034', 'password' =>  'jfelipepass'])) {
              // Authentication passed...
              return Redirect::to('/processor');
          }
          return Redirect::to('/customer');

       /*        //
       $credentials = Input::only('user_id', 'password');
       //if ( ! Auth::attempt($credentials))
       $success = Auth::attempt(['user_id' => '201201034', 'password' => 'jfelipepass']);
       if($success)
       {
           //return Redirect::back()->withMessage('Invalid credentials');
          return Redirect::to('/processor');
       }
       else{
          return Redirect::to('/customer');
       }
       if (Auth::user()->user_type == 'Processor')
       {
           //return Redirect::to('/processor');
       }
       return Redirect::to('/superadmin');*/
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
