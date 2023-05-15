@extends('Layouts.main')

@section('title', 'index-client')

@section('content')
    <br>
    <h3><center>Jaringan OPD</center></h3>
    <br><br>
    <table class='table'>
        <tr>
            <td>No.</td>
            <td>Nama Client</td>
            <td>IP Client</td>
            <td><center>Aksi</center></td>
        </tr>
        @foreach ($client as $a)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$a->nama_client}}</td>
            <td>{{$a->ip_client}}</td>
            @if(Auth::check())
                <td><center><a href="/detail-client/{{$a->id_client}}"><button type="button" class="btn btn-primary">Detail Status</button></a></center></td>
            @else
                <td><center><a href="/detail/{{$a->id_client}}"><button type="button" class="btn btn-primary">Detail Status</button></a></center></td>
            @endif
        </tr>
        @endforeach
    </table>
    <br>
    @if(Auth::check())
        <a href="/add-client"><button type="button" class="btn btn-success">Daftar Jaringan</button></a> 
    @endif
@endsection    