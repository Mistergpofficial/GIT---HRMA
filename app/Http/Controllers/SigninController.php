<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('accounts.signin');
    }


    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_admin' => 2,
        ], $request->has('remember')))
        {
            return redirect('/admin/dashboard');
        }else
            if(Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'is_employee' => 1,
            ], $request->has('remember')))
            {
                return redirect('/user/dashboard');
            }
            session()->flash('danger', 'Authentication Failed!');
            return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
