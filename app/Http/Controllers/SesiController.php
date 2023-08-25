<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SesiController extends Controller
{
    //
    function index()
    {
        // echo "hello";
        return view("login");
    }
    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'

        ],[
            'email.required'=>'email wajid diisi',
            'password.required'=>'password wajid diisi',
        ]);
        $infologin=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($infologin)){
          if(Auth::user()->role == 'pengguna'){
            return Redirect('halamanAdmin');
          }
        //   elseif{
        //     //
        //   }
        //   elseif{
        //     //
        //   }
        }else{
            return redirect('')->withErrors('username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }
    function logout(){
        Auth::logout();
            return redirect('');
    }
}
