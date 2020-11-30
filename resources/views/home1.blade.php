@extends('template')

@section ('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        @if(!auth()->user()->two_factor_secret)
                        
                            no esta ctivada la 2fa
                            <form method="POST" action="{{url('user/two-factor-authentication')}}">
                            @csrf
                            <buttontype="submit" class="btn btn-primary">
                            Activar
                            </button>
                        </form>
                        @else
                            Esta activada la 2fa
                            <form method="POST" action="{{url('user/two-factor-authentication')}}">
                            @csrf
                            @method('DELETE')
                            <buttontype="submit" class="btn btn-primary">
                            Desactivar
                            </button>
                        </form>
                        @endif

                        

                        if(session('status') == 'two-factor-authentication-enabled')
                        <p>Activado 2fa, escenea el codigo qr</p>

                            {{!! auth()->user()->twoFactorQrCodeSvg() !!}}

                        <p>guarda estos codigos</p>
                        @foreach(json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code
                            {{ trim($code)}} <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection