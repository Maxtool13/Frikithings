@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{asset('assets/images/64299300_p0_master1200.jpg')}}" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <h1>{{ $error }}</h1>
                        @endforeach
                    @endif
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="card-body">
                        <div class="brand-wrapper">
                        <img src="{{asset('assets/images/frikithing_logo.png')}}" alt="logo" class="logo">

                        </div>
                        <p class="login-card-description">Recuperar cuenta</p>

                        @if(session('status'))
                            <div class="alert alert-success" role="alert" >{{session('status')}}</div>
                        @endif

                        <form method="POST" action="{{ route('password.request') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only">Correo electronico</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Recuperar">
                        </form>
                        
                        <p class="login-card-footer-text">Aun no tienes cuenta? <a href="{{ route('register') }}" class="text-reset">Haz que un administrador te registre</a></p>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Terminos de uso.</a>
                            <a href="#!">Politica de Privacidad</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection
