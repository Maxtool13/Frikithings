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
                    <a class="nav-link" href="https://twitter.com/monaschinasomex?lang=es" target="_blank"><i
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
        </div>
        </header>

        <div class="container-fluid video-player">
        <div class="container">
            <div class="row vr-gallery">
                    <div class="col-md-8 mb-4">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 pr-0 pd-md">
                                <img src="{{asset('assets/images/noticias/noticias_solairechikito.png')}}" alt="">
                            </div>
                            <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                                <p><small>29 de Marzo de 2020</small></p>
                                <h3>Bienvenido a las noticias! </h3>
                                <p>
                                    En esta seccion encontraras noticias relacionadas a diferentes peliculas, series actores. 
                                    Tambien puedes encontrar noticias relacinadas al anime, conciertos y mangas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pl-4 mb-4">
                        <div class="card">
                            <img class="card-img h-100" src="{{asset('assets/images/noticias/noticias_marvel616.png')}}" alt="">
                            <div class="card-img-overlay opacity text-center">
                                <a class="play-1" href="https://www.youtube.com/watch?v=a-K9CP1FR9o"><img
                                        src="{{asset('assets/images/play-icon.png')}}" alt=""></a>
                                <h5 class="card-title">Marvel 616 Trailer Oficial </h5>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8 mb-4 pr-0 pd-md">
                        <div class="card">
                            <img class="card-img h-100" src="{{asset('assets/images/noticias/noticias_4peliculas.png')}}" alt="">
                            <div class="card-img-overlay">
                                <div class="contact-box">
                                    <p><small>24 de Septimebre de 2020</small></p>
                                    <h3><a href="https://www.cinemascomics.com/2021-tendra-hasta-4-peliculas-de-marvel/">2021 tendra hasta 4 peliculas de Marvel</a></h3>
                                    <p>Como no han estrenado ninguna película de Marvel en 2020, esto provocará que 2021 se llene 
                                        de estrenos muy grandes en los cines de todo el mundo...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pl-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('assets/images/noticias/noticias_witcher.png')}}" alt="">
                            <div class="card-body bg-gray cus-pd2 cus-arrow-up">
                                <p><small>26 de Septiembre 2020</small></p>
                                <h3><a href="https://www.tonica.la/series/The-Witcher-temporada-2-revela-2-nuevos-personajes-de-los-libros-20200926-0019.html#&gid=1&pid=1">“The Witcher” temporada 2 revela 2 nuevos personajes de los libros</a></h3>
                                <p>The Witcher” ha preparado la producción una vez más para la temporada 2, y dicha temporada dará la bienvenida a varios personajes importantes de los 
                                    libros al programa, incluidos Vesemir, Nivellen, Lambert, Lydia, Dijkstra y más...</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 mb-4">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 pr-0 pd-md">
                                <img src="{{asset('assets/images/noticias/noticias_escenas.png')}}" alt="">
                            </div>
                            <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                                <p><small>24 de Septimebre de 2020</small></p>
                                <h3><a href="https://www.cinemascomics.com/el-snyder-cut-tendra-nuevas-escenas-de-ben-affleck-henry-cavill-y-gal-gadot/">El Snyder Cut tendrá nuevas escenas de Ben Affleck, Henry Cavill y Gal Gadot</a></h3>
                                <p>
                                El Snyder Cut está preparándose para sorprender a la audiencia. Según se confirmó, Zack Snyder filmará nuevas 
                                escenas con Ben Affleck, Henry Cavill, Gal Gadot y Ray Fisher...
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pl-4 mb-4">
                        <div class="card">
                            <img class="card-img h-100" src="{{asset('assets/images/noticias/noticia_star.png')}}" alt="">
                            <div class="card-img-overlay opacity text-center">
                                <a class="play-1" href="https://www.youtube.com/watch?v=4tDa1H0FCb4"><img
                                        src="{{asset('assets/images/play-icon.png')}}" alt=""></a>
                                <h5 class="card-title">Star Wars SQUADRONS Cinematic Trailer</h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <a href="https://www.cinemascomics.com/" class="btn">Más Noticias.</a>

                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>

    
    <div class="container-fluid fh5co-recent-news mt-5 pb-5">
        <h2 class="text-uppercase text-center">Noticias de Anime Recientes</h2>
        <hr class="mx-auto" />

        <div class="play-list mt-5 pt-4">
            <div class="owl-carousel owl-carousel5 owl-theme">
                <div>

                    <div class="card"> <img class="card-img link-img" src="{{asset('assets/images/noticias/noticia_lovelive2.jpg')}}" height="420px" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="https://somoskudasai.com/noticias/anime/se-revelo-un-nuevo-adelanto-para-el-anime-love-live-nijigasaki-gakuen-school-idol-doukoukai/" class="text-white"> <i class="fas fa-retweet"></i> Ir a la noticia.</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> 27 de Septimebre de 2020
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Se reveló un nuevo adelanto para el anime Love Live! Nijigasaki Gakuen School Idol Doukoukai</h4>
                                <p class="text-white">Kudasai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="{{asset('assets/images/noticias/noticias_jojo.png')}}" height="420px" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="https://somoskudasai.com/noticias/anime/jojos-bizarre-adventure-podria-tener-un-nuevo-proyecto-en-desarrollo/" class="text-white"> <i class="fas fa-retweet"></i> Ir a la noticia.</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> 25 de Septimebre de 2020
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Jojo’s Bizarre Adventure podría tener un nuevo proyecto en desarrollo</h4>
                                <p class="text-white">Chirumiru</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="{{asset('assets/images/noticias/noticia_uzaki.jpg')}}" height="420px" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="https://somoskudasai.com/noticias/anime/el-anime-uzaki-chan-wa-asobitai-tendra-segunda-temporada/" class="text-white"> <i class="fas fa-retweet"></i> Ir a la noticia.</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> 25 de Septimebre de 2020
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">El anime Uzaki-chan wa Asobitai! tendrá segunda temporada</h4>
                                <p class="text-white">Chirumiru</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="{{asset('assets/images/noticias/noticias_berserk.jpg')}}" height="420px" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="https://somoskudasai.com/noticias/manga/la-franquicia-berserk-dara-un-importante-anuncio-en-octubre/" class="text-white"> <i class="fas fa-retweet"></i> Ir a la noticia.</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> 18 de Septimebre de 2020
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">La franquicia Berserk dará un importante anuncio en octubre</h4>
                                <p class="text-white">Chirumiru</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="{{asset('assets/images/noticias/noticias_oregairu.jpg')}}" height="420px" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="https://somoskudasai.com/noticias/anime/la-tercera-temporada-de-oregairu-revela-la-portada-de-su-ultimo-blu-ray-dvd/" class="text-white"> <i class="fas fa-retweet"></i> Ir a la noticia.</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> 23 de Septimebre de 2020
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">La tercera temporada de Oregairu revela la portada de su último Blu-ray/DVD</h4>
                                <p class="text-white">Chirumiru</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="{{asset('assets/images/noticias/noticias_nose.jpg')}}" height="420px" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="https://somoskudasai.com/noticias/anime/el-anime-jaku-chara-tomozaki-kun-revela-una-ilustracion-especial/" class="text-white"> <i class="fas fa-retweet"></i> Ir a la noticia.</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> 29 de Septimebre de 2020
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">El anime Jaku-chara Tomozaki-kun revela una ilustración especial</h4>
                                <p class="text-white">Chirumiru</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="{{asset('assets/images/noticias/furuhashiuwu.jpg')}}" height="420px"alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="https://somoskudasai.com/noticias/manga/el-manga-bokutachi-wa-benkyou-ga-dekinai-revela-la-portada-de-su-volumen-19/" class="text-white"> <i class="fas fa-retweet"></i> Ir a la noticia.</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> 28 de Septimebre de 2020
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">El manga Bokutachi wa Benkyou ga Dekinai revela la portada de su volumen 19</h4>
                                <p class="text-white">Chirumiru</p>
                            </div>
                        </div>
                    </div>
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

