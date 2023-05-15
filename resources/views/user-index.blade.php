@extends('Layouts.main')

@section('title', 'index-user')

@section('content')
    <br>
    <h3><center>List Pengguna</center></h3>
    <br><br>
    <table class='table'>
        <tr>
            <td>No.</td>
            <td>Nama User</td>
            <td>Email</td>
            <td><center>Aksi</center></td>
        </tr>
        @foreach ($user as $a)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$a->name}}</td>
            <td>{{$a->email}}</td>
            <td>
                <center>
                    <a href="/edit-user/{{$a->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="/delete-user/{{$a->id}}"><button type="button" class="btn btn-danger">Hapus</button></a> 
                </center> 
                
            </td>
        </tr>
        @endforeach
    </table>
   
@endsection    