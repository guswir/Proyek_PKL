@extends('Layouts.main')

@section('title', 'edit-client')

@section('content')
    <div class='container-sm'>
       <div class='card-body p-5' >
       <h3><center>Edit Client</center></h3>
        <form method="POST" action="/save-client/{{$client->id_client}}">
        @csrf
        @method('PUT')
        <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Nama Client</label>
                    <input type="text" name="nama_client" value="{{$client->nama_client}}" class="form-control me-2" />
                </div>

        <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">IP Client</label>
                    <input type="text" name="ip_client" value="{{$client->ip_client}}" class="form-control" />
                </div>

        <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Simpan</button>
            </form>
       </div>
   
    </div>
@endsection