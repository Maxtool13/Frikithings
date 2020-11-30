<!doctype html>
<html>

        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}"
                integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
            
            <title>EDICION DE ROPA</title>
        </head>

                <body>
                <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">FrikiThings</h2> 
        </div>
    </header>

                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ir a:
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="/regycon/registros/regropa">Registrar Prendas</a>
                    <a class="dropdown-item" href="/regycon/consultas/conropa">Consultar Prendas</a>
                    <a class="dropdown-item" href="/webb/menurc">Consulta|Registro</a>
                    </div>
                </div>
                </div>


                <center>
                    <br>
                    <h2>Edicion del Registro</h2>
                </center>

                <br>

                    <form action="{{ url('/Ropa/'.$datosropa->id)}}" method="POST" id="chucha" enctype="">
                        {{csrf_field() }}
                        {{method_field('PATCH')}}
                            
                        <label for="Tipo" id="blin">{{'Tipo'}}</label>
                        <input type="text" name="tipo" id="tipo" value="{{$datosropa->tipo}}">
                        <br>

                        <label for="Talla" id="blin">{{'Talla'}}</label>
                        <input type="text" name="talla" id="talla" value="{{$datosropa->talla}}">
                        <br>

                        <label for="Genero" id="blin">{{'Genero'}}</label>
                        <input type="text" id="cuak" name="genero" id="genero" value="{{$datosropa->genero}}">
                        <br>

                        <label for="Numero de lote" id="blin">{{'Numero de lote'}}</label>
                        <input type="text" id="cuak" name="nolote" id="nolote" value="{{$datosropa->nolote}}">
                        <br>

                        <label for="Origen" id="blin">{{'Origen'}}</label>
                        <input type="text" id="cuak" name="origen" id="origen" value="{{$datosropa->origen}}">
                        <br>

                        <label for="Peso kg" id="blin">{{'Peso kg'}}</label>
                        <input type="number" id="cuak" name="peso" id="peso" value="{{$datosropa->peso}}">
                        <br>

                        <center>
                        <button type="submit" class="btn btn-success btn-lg">Editar</button>
                        <a href="/regycon/consultas/conropa"><button type="button" class="btn btn-secondary btn-lg">Regresar a la Consulta</button></a>
                        
                        </center>

                    </form>
                    
                    <br>


                    <footer class="container-fluid pt-5">
        <div class="container">
            <h2 class="logo text-center">FrikiThings</h2>
            
        </div>
        <div class="copyright mt-4">
            <p class="text-center">&copy; 2020 <a href="#" class="text-white">FrikiThings</a>
            <a href="/webb/menurc" class="text-white">//Consultas/Registros</a>. <a href="/webb/terminos"> Terminos y Condiciones.</a> Design
                by <a href="https://freehtml5.co/shahala" target="_blank" class="text-white">FreeHTML5.co</a>.</p>
        </div>
    </footer>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>