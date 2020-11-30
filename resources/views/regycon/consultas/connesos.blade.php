
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Consulta de Nesoberis</title>

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    </head>
 
    <body>

    <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">FrikiThings</h2> 
        </div>
    </header>

    <center>
            <br>
    <h2>Consulta del registro</h2>
        </center>



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
                <br>

                </div>
                <a href="/reportes/reporte"><button type="button" class="btn btn-primary">Generar Reporte</button></a>  


                <br>
    <br>

    
                
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    
                    <tr>
                        <th> ID </th>
                        <th> NOMBRE </th>
                        <th> SERIE </th>
                        <th> TAMAÑO (cm) </th>
                        <th> PESO (gr)</th>
                        <th> PRECIO (MXN)</th>
                        <th> EMPAQUE</th>  
                        <th> IMAGEN</th>
                        <th colspan="2">OPCIONES</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($nesoberis as $nesos)
                                <tr>
                                    <td> {{$nesos->id}}</td>
                                    <td> {{$nesos->nombre}}</td>
                                    <td> {{$nesos->serie}}</td>
                                    <td> {{$nesos->tamaño}}</td>
                                    <td> {{$nesos->peso}}</td>
                                    <td> {{$nesos->precio}}</td>
                                    <td> {{$nesos->empaque}}</td>
                                    <td> <img src="{{asset('storage').'/'.$nesos->imagen}}" alt="" ></td>
                                    <td>
                                    <a href="{{ route ('Nesoberis.show', $nesos->id)}}"><button type="button" class="btn btn-primary">Ver</button></a>  
                                    
                                <form method="post" action="{{ url('/Nesoberis/'.$nesos->id)}}">
                                    {{csrf_field() }}
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm ('¿Seguro que quieres borrar este registro?');" class="btn btn-danger">Borrar</button>
                                </form>
                                </td>
                                </tr>
                                @endforeach
                    </tbody>
                </table>
            

        {{$nesoberis->links()}}


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