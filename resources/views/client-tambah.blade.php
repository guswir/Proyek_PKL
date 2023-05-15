@extends('Layouts.main')

@section('title', 'tambah-client')

@section('content')
    
    <div class='container-sm'>
       <div class='card-body p-5' >
       <h3><center>Tambah Client</center></h3>
       <form method="POST" action="save-client">
        @csrf
    <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="nama_client">Nama Client</label>
                <input type="text" name="nama_client" class="form-control" />
            </div>

    <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="ip_client">IP Client</label>
                <input type="text" name="ip_client" class="form-control" />
            </div>

    <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Tambah</button>

        </form>
       </div>
    </div>
@endsection