@extends('Layouts.main')

@section('title', 'edit-user')

@section('content')
    <div class='container-sm'>
       <div class='card-body p-5' >
       <h3><center>Edit Pengguna</center></h3>
        <form method="POST" action="/save-user/{{$user->id}}">
        @csrf
        @method('PUT')
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Nama Pengguna</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control me-2" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Email</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" name="password" value="" class="form-control" />
                </div>

        <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Simpan</button>
            </form>
       </div>
   
    </div>
@endsection