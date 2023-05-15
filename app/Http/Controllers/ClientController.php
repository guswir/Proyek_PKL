<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function lihat(){
        $client=Client::all();
        return view('test', ['client'=> $client]);
    }

    public function lihatstatus($id_client){
        $ip=Client::select('ip_client')->where('id_client', $id_client)->first()->ip_client;
        $ping = exec("ping -n 1 $ip", $output, $status);
        if($status==0){
            $client=Client::where('id_client', $id_client)->update([
                'status' => 'Online'
            ]);
        }
        else{
            $client=Client::where('id_client', $id_client)->update([
                'status' => 'Offline'
            ]);
        }
        // $client=Client::where('id_client', $id_client)->update([
        //     'status' => $status
        // ]);
        $client=Client::where('id_client', $id_client)->first();
        return view('test2',['client'=> $client] );
    }

    public function lihatstatusbiasa($id_client){
        $ip=Client::select('ip_client')->where('id_client', $id_client)->first()->ip_client;
        $ping = exec("ping -n 1 $ip", $output, $status);
        if($status==0){
            $client=Client::where('id_client', $id_client)->update([
                'status' => 'Online'
            ]);
        }
        else{
            $client=Client::where('id_client', $id_client)->update([
                'status' => 'Offline'
            ]);
        }
        // $client=Client::where('id_client', $id_client)->update([
        //     'status' => $status
        // ]);
        $client=Client::where('id_client', $id_client)->first();
        return view('test2-biasa',['client'=> $client] );
    }

    public function tambah(){
        return view('client-tambah');
    }

    public function simpan(Request $request){
        $client = Client::create([
            'nama_client' => $request->nama_client,
            'ip_client' => $request->ip_client,
        ]);
        return redirect('index-client');
    }

    public function edit(Request $request, $id_client){
        $client = Client::where('id_client', $id_client)->first();
	    return view('client-edit',['client' => $client]);
    }

    public function update(Request $request, $id_client){
        $client = Client::where('id_client', $id_client)->update([
            'nama_client' => $request->nama_client,
            'ip_client' => $request->ip_client,
        ]);
        return redirect('index-client');
    }

    public function hapus($id_client){
        $client = Client::where('id_client', $id_client)->delete();
        return redirect('index-client');
    }

    // public function test(){
    //     $client=Client::all('ip_client');
    //     return view('coba', ['coba'=> $client]);
    // }
}
