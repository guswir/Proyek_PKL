@extends('Layouts.main')

@section('title', 'register')

@section('content')
    <br>
    <h3 class="text-center mb-5">Register</h3>
    <div class='container-sm'>
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
        <form method='POST' action="save-user">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Nama</label>
                <input type="text" name='name' id="form3Example1cg" class="form-control" />
            </div>
<!-- 
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Jenis Kelamin</label>
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Tempat Lahir</label>
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-date" for="form3Example3cg">Tanggal Lahir</label>
                    <input type="date" id="form3Example3cg" class="form-control form-control-lg" />
                    </div> -->

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Email</label>
                <input type="email"  name='email' id="form3Example3cg" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>
                <input type="password" name='password' id="form3Example4cg" class="form-control" />
            </div>

                    <!-- <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    </div> -->

                    <!-- <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                    </div> -->

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Daftar</button>
            </div>

            <p class="text-center text-muted mt-5 mb-0">Sudah punya akun? <a href="/login"
                class="fw-bold text-body text-primary"><u>Login</u></a></p>

        </form>
    
    </div>
@endsection