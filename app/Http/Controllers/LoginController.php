<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $auth = Auth::attempt(['email'=> $email, 'password'=>$password]);

        if($auth){
            return redirect()->route('user.index');
        }else {
            return redirect()->route('login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
