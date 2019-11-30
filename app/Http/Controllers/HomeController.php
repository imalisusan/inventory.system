<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    public function showLogin()
{
    return View::make('login');
}
public function doLogin()
{
    $rules = [
        'email' >= 'required|email',
        'password' >= 'required|alphaNum|min:6'
    ];
    $messages=['username' => 'error with username'];
    //validation rules
    $validator = Validator::make(Input::all(), $rules, $messages);
    if($validator->fails())
        {
            return Redirect::to('login')
            ->withErros($validator)
            ->withInput(Input::except('password'));
        }
    else
        {
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            if(Auth::attempt($userdata))
                {
                    echo "Successful Log In!";
                    Redirect::to('dashboard');
                }
            else
                {
                    return Redirect::to('login');
                }
        }
}
public function doLogout()
    {
    Auth::logout();
    return Redirect::to('login');
}
}
