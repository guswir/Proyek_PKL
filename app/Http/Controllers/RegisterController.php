<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    //
    public function lihat(){
        return view('register');
    }

    public function simpanregister(Request $request){
        $User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'action' => 1
        ]);
        Session::flash('message', 'Register Berhasil');
        return redirect('login');
    }
}
