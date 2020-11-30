@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{asset('assets/images/75014508_p0_master1200.jpg')}}" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    
                    <div class="card-body">
                        <div class="brand-wrapper">
                        <img src="{{asset('assets/images/frikithing_logo.png')}}" alt="logo" class="logo">

                        </div>
                        <p class="login-card-description">Revisa tu buzon, te enviamos un correo de confirmacion</p>

                        @if(session('status'))
                            <div class="alert alert-success" role="alert" >{{session('status')}}</div>
                        @endif
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <br>
                            <br>
                            <br>

                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Reenviar Correo">
                        </form>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
@endsection
