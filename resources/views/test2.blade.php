@extends('Layouts.main')

@section('title', 'status')

@section('content')
    <div class='container-sm'>
       <div class='card-body p-5' >
       <h3><center>Detail Client</center></h3>
        <form method="POST" action="">
        @csrf
        @method('PUT')
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Nama Client</label>
                    <input name="nama_client" value="{{$client->nama_client}}" class="form-control me-2" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">IP Client</label>
                    <input type="text" name="ip_client" value="{{$client->ip_client}}" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Status</label>
                    @if($client->status=='online')
                        <input type="text" name="status" value="{{$client->status}}" class="form-control text-success" />
                    
                    @else
                        <input type="text" name="status" value="{{$client->status}}" class="form-control text-danger" />
                    
                    @endif
                    <!-- <input type="text" name="ip_client" value="{{$client->status}}" class="form-control" /> -->
                </div>

        <!-- Submit button -->
                <a href="/edit-client/{{$client->id_client}}"><button type="button" class="btn btn-success">Edit Profil</button></a> 
                <a href="/delete-client/{{$client->id_client}}"><button type="button" class="btn btn-danger">Hapus</button></a> 
            </form>
       </div>
   
    </div>
@endsection    