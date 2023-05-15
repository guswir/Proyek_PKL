@extends('Layouts.main')

@section('title', 'login')

@section('content')
<br>
<h3><center>Login</center></h3>
    <div class='container-sm'>
       <div class='card-body p-5' >
            <form action="action-login" method="post">
                @csrf
                @method('PUT')
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1">Email address</label>
                    <input type="email" name='email' id="form3Example1" class="form-control me-2" />
                </div>

        <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example2">Password</label>
                    <input type="password" name='password' id="form3Example2" class="form-control" />
                </div>

        <!-- 2 column grid layout for inline styling -->
                <!-- <div class="row mb-4">
                    <div class="col-auto my-1"> -->
            <!-- Checkbox -->
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form3Example31" checked />
                            <label class="form-check-label" for="form3Example31"> Ingat saya </label>
                        </div>
                    </div>
                    <div class="col-auto my-1"> -->
            <!-- Simple link -->
                        <!-- <a href="#">Lupa password?</a>
                    </div>
                </div> -->

        <!-- Submit button -->
                <button type="submit" class="btn btn-success btn-block mb-4">Masuk</button>

        <!-- Register buttons -->
                <div class="text-center">
                    <p>Belum punya akun? <a href="/register" class="fw-bold text-body text-primary">Daftar</a></p>
                    <!-- <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button> -->
                </div>
            </form>
    <!-- Email input -->
            
       </div>
    </div>
@endsection