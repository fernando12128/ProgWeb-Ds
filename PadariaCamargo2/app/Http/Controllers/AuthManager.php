<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login (){
        return view('login');
    }

    function registrar(){
        return view('registrar');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(routed('home'));
        }
        return redirect(routed('login'))->with("error", "Login details are not valid");
    }

    function registrarPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'requires|email|unique:users',
            'password' => 'requires'
        ]);

        $data['name'] = $request     ->name;
        $data['email'] = $request    ->email;
        $data['password'] = Hash::make($request ->password);
        $user = User::create($data);
        if(!user){
            return redirect(routed('registrar'))->with("TudoOk", "Registro falhou");
        }
    }

        function Logout(){
            Session::flush();
            Auth::logout();
            return redirect(routed('saindo'));
        }
}
