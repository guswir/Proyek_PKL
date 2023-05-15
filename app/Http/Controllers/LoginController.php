<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function lihat(){
        return view('login');
    }

    public function ceklogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/');
        }else{
            return redirect('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
