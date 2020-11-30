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
            
            <title>EDICION DE NESOBERIS</title>
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
                    <a class="dropdown-item" href="/regycon/registros/regnesos">Registrar Nesoberis</a>
                    <a class="dropdown-item" href="/regycon/consultas/connesos">Consultar Nesoberis</a>
                    <a class="dropdown-item" href="/webb/menurc">Consulta|Registro</a>
                    </div>
                </div>
                </div>


                <center>
                    <br>
                    <h2>Edicion del registro</h2>
                </center>

                <br>

                    <form action="{{ url('/Nesoberis/'.$datosneso->id)}}" method="POST" id="chucha" enctype="multipart/form-data">
                        {{csrf_field() }}
                        {{method_field('PATCH')}} 
                            
                        <label for="nombre" id="blin">{{'Nombre'}}</label>
                        <input type="text" id="cuak" name="nombre" id="serie" value="{{$datosneso->nombre}}">
                        <br>

                        <label for="Serie" id="blin">{{'Serie'}}</label>
                        <input type="text" id="cuak" name="serie" id="serie" value="{{$datosneso->serie}}">
                        <br>

                        <label for="tamaño" id="blin">{{'Tamaño(cm)'}}</label>
                        <input type="number" id="cuak" name="tamaño" id="tamaño" value="{{$datosneso->tamaño}}">
                        <br>

                        <label for="peso" id="blin">{{'Peso(gr)'}}</label>
                        <input type="number" id="cuak" name="peso" id="peso" value="{{$datosneso->peso}}">
                        <br>

                        <label for="empaque" id="blin">{{'Empaque'}}</label>
                        <input type="text"  id="cuak" name="empaque" id="empaque" value="{{$datosneso->empaque}}">
                        <br>

                        <label for="precio" id="blin">{{'Precio MXN'}}</label>
                        <input type="number"  id="cuak" name="precio" id="precio" value="{{$datosneso->precio}}">
                        <br>

                        <label for="imagen" id="blin">{{'Imagen'}}</label>
                        <br>
                        <img src="{{asset('storage').'/'.$datosneso->imagen}}" alt="" >
                        <br>
                        <input type="file"  id="cuak" name="imagen" id="imagen" value="" >
                        <br>

                        <center>
                        <button type="submit" class="btn btn-success btn-lg">Editar</button>
                        <a href="/regycon/consultas/connesos"><button type="button" class="btn btn-secondary btn-lg">Regresar a la Consulta</button></a>

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