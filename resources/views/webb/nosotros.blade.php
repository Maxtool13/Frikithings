<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>FrikiThings</title>
</head>

<body>
<header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">FrikiThings</h2>
            <nav class="nav nav-fill mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/neso.bunker" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/MonasChinasOMex" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://freehtml5.co/"><i class="fas fa-rss"></i></a>
                </li>
            </nav>


            <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
            <div class="ml-0 mr-0 pb-1">
                <nav class="navbar navbar-expand-md">

                    <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                        aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                        aria-label="Toggle navigation">
                        <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                    </button>
                    <div id="my-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/webb/index">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/webb/noticias">NOTICIAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/webb/nosotros">NOSOTROS</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/webb/contacto">CONTACTANOS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/tienda/tiendamn">TIENDA</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            
            <ul class="nav nav-fill mx-auto breadc pb-3">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"></a>
                </li>
                <li><img src="{{asset('assets/images/star-shape.png')}}" class="mt-2" alt=""></li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>



    </header>


    <div class="container-fluid ar-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pr-5">
                    
                    <div class="row date-time mt-3">

                        <div class="col text-white">
                            <a href="#"> <i class="fas fa-retweet"></i> Share</a>
                        </div>
                        <div class="col text-right"><a href="#"> June 3, 2019 &nbsp; 6 <i
                                    class="far fa-comments"></i></a></div>
                    </div>
                    <br></br>
                    <br></br>
                    
                    <h2>¿Quienes somos?</h2>
                    <p>Somos una pagina web latinoamerica la cual tiene el proposito de ayudar a todas esas personas que quieran comprar sus 
                        cosas favoritas a un buen precio.   </p>

                    <div class="media my-5">
                        <div class="q-box d-flex align-items-center justify-content-center"><img
                                src="{{asset('assets/images/quote.png')}}" alt=""></div>
                        <div class="bbg media-body">
                            <h5 class="mb-0"> "Los que estamos aquí sabemos lo dificil que es conseguir mercancia de otros paises y aun mas en la situacion actual en la que vivivmo
                                hoy en día, es por eso que quiero iniciar este proyecto" - La persona que le dio vida al proyecto.
                            </h5>

                        </div>
                    </div>

                    <p>
                        Tenemos el objetivo de ayudarnos entre hermanos latinos, funcionando como provedores directos o intermediarios para paginas
                        distintas tiendas online que comporten nuestro objetivo.  </p>

                    <p> Nuestra manera de trabajar es mediante pedidos, puedes ir a la pagina de <a href="/webb/contacto">contactanos</a> para realizar tu pedido, preguntar
                        por paquetes o el metodo de envio. 
                        <br></br>
                        El pedido se puede hacer con los productos que tenemos en stock o enviando un correro y nosotros te confirmaremos si es que se encunetra disponible. Si
                        el pedido procede se realizan 2 pagos, uno se realiza para la confirmacion de compra y el segundo cunado lo tengamos en nuestras manos para proceder con 
                        el envío.
                        <br></br>
                    </p>
                </div>

                
            </div>
        </div>
    </div>
    


    <div class="container-fluid jumbotron-fluid stay mt-5 pt-5 pb-5">
        <h2 class="text-center">¿Quieres ser el primero saber cuando se abren nuevos pedidos?</h2>
        <p class="text-center mt-2">¡Subscribite y no te pierdas de nuevas ofertas y mercancia!</p>
        <div class="input-group mt-4 mx-auto" style="max-width: 640px">
            <input type="email" class="form-control" placeholder="CONFIANOS TU CORRERO ELECTRONICO :^]">
            <div class="">
                <button class="btn btn-success ml-2" type="submit">SUBSCRIBETE</button>
            </div>
        </div>
    </div>

    <footer class="container-fluid pt-5">
        <div class="container">
            <h2 class="logo text-center">FrikiThings</h2>
            <nav class="nav nav-fill mx-auto mt-5">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/neso.bunker" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/MonasChinasOMex" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://freehtml5.co/"><i class="fas fa-rss"></i></a>
                </li>
            </nav>
        </div>
        <div class="copyright mt-4">
            <p class="text-center">&copy; 2020 <a href="#" class="text-white">FrikiThings</a>
            <a href="/webb/menurc" class="text-white">//Consultas/Registros</a>. <a href="/webb/terminos"> Terminos y Condiciones.</a> Design
                by <a href="https://freehtml5.co/shahala" target="_blank" class="text-white">FreeHTML5.co</a>.</p>
        </div>
    </footer>

    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.yu2fvl.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    

</body>

</html>