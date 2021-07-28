@extends('layouts.app')
@section('content')
<div class="container mt-5 py-5">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
            <div class="card card-signin my-4">
                <div class="card-body">
                    <h3 class="text-center mb-3">Iniciar sesion</h3>
                    <form action="" method="POST" class="form-signin">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" name="email"
                                placeholder="Email address" required value="{{old('email')}}">
                            <label for="inputEmail">Correo electrónico</label>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" name="password"
                                placeholder="Password" required>
                            <label for="inputPassword">Contraseña</label>
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button class="btn btn-lg bg-accent text-white btn-block" type="submit">Iniciar sesion</button>
                            <a class="d-block text-center mt-2 mb-3 text-dark" href="/register">Registrarse</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
