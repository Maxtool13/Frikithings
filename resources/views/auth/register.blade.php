@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{asset('assets/images/328575.jpg')}}" alt="login" class="login-card-img" height="600">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="{{asset('assets/images/frikithing_logo.png')}}" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description">Registra una nueva cuenta</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="sr-only">Nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-group">
                                <label for="email" class="sr-only">Correo electronico</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Confirmar Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                            </div>
                            <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit" value="Registrar">
                        </form>
                        <a href="{{ url('forgot-password') }}" class="forgot-password-link">Olvidaste la contraseña?</a>
                        <p class="login-card-footer-text">Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-reset">Inicia sesion aquí</a></p>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Terminos de uso</a>
                            <a href="#!">Politica de privacidad</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
