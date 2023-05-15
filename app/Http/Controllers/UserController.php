<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function lihat()
    {
        # code...
        // dd('test');
        // return view('test');
        $user=User::all();
        return view('user-index', ['user'=> $user]);
    }

    public function edit(Request $request, $id){
        $user = User::where('id', $id)->first();
	    return view('user-edit',['user' => $user]);
    }
    //
    public function update(Request $request, $id){
        $user = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect('index-user');
    }

    public function hapus($id){
        $user = User::where('id', $id)->delete();
        return redirect('index-user');
    }
}
