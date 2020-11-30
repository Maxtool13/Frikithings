<!doctype html>
<html>

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
            <a href="/webb/index"><h2 class="logo">FrikiThings</h2></a>
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

                            <li class="nav-item">
                                <a class="nav-link" href="/tienda/tiendamn">TIENDA</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    

        <div class="row ml-0 mr-0">
            <div class="col-md-6 pr-0">
                <div class="card">
                    <img class="card-img" src="{{asset('assets/images/index/marvel_dc.jpg')}}" alt="">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <p>¿Buscas figuras de tu heroe o waifu preferida?</p>
                        <hr />
                        <h2>!Mira lo que tenemos en stock!</h2>
                        <a href="https://akihabaratoys.com/" class="btn">SABER MÁS -></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <div class="card">
                    <img class="card-img" src="{{asset('assets/images/index/consolas.png')}}" alt="">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <p>¿CONSOLERO?</p>
                        <hr />
                        <h2>¡Juegos, Consolas y Mandos de las ediciones coleccionista, busca el tuyo!</h2>
                        <a href="https://www.amazon.com.mx/s?k=xbox&__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&ref=nb_sb_noss_2" class="btn">SABER MÁS -></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pr-0 first">
                <div class="card">
                    <img class="card-img" src="{{asset('assets/images/index/comic_manga.jpg')}}" alt="">
                    <div class="card-img-overlay">
                        <h5>Comics/Manga</h5>
                        <h5><a href="https://www.tiendapanini.com.mx/" class="btn">SABER MÁS -></a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="{{asset('assets/images/index/fuwafuwa.png')}}" alt="">
                    <div class="card-img-overlay">
                        <h5>Nesoberis/Dakimakuras</h5>
                        <h5><a href="https://www.facebook.com/neso.bunker" class="btn">SABER MÁS -></a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="{{asset('assets/images/index/ropa.png')}}" alt="">
                    <div class="card-img-overlay">
                        <h5>Ropa</h5>
                        <h5><a href="article.html" class="btn">SABER MÁS -></a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 last">
                <div class="card">
                    <img class="card-img" src="{{asset('assets/images/index/accessorios.png')}}" alt="">
                    <div class="card-img-overlay">
                        <h5>Accesorios</h5>
                        <h5><a href="article.html" class="btn">SABER MÁS -></a></h5>
                    </div>
                </div>
            </div>
        </div>

    </header>



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