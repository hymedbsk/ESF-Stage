<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Espace Santé Famille</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <script async
	src="//book.timify.com/widget/widget.min.js"
	id="timify-widget"
	data-position="left"
	data-locale="fr-be"
	data-account-id="5ea1627d759dde6c545d94a8"
	data-locale="en-gb"
></script>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-green fixed-top" id="mainNav">
            <div class="container help">
                <a class="navbar-brand js-scroll-trigger" href="{{ url('/#page-top') }}"><img src="{{asset('assets/img/Logo-ESF-RVB-1-5.png')}}" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/#portfolio') }}">Espace Santé Famille</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/#social') }}">Réseaux sociaux</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/#about') }}">à propos de nous</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/#team') }}">l&apos;équipe</a></li>
                        @guest
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/stage') }}">Stage</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://book.timify.com/?accountId=5ea1627d759dde6c545d94a8&hideCloseButton=true"target="_blank">Prendre Rendez-vous</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/membre') }}">Devenir membre</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/#contact') }}">Contact</a></li>
                        @endguest
                        @if(Auth::user())
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #CD9A64; border: none;">
                                {{ Auth::user()->nom }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="nav-item"><a class="dropdown-item" method="POST" href="{{ url('logout') }}"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Déconnexion</a></li>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                 style="display: none;">
                                 @csrf
                               </form>
                            </div>
                        </div>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
            @yield('content')
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright©Espace Santé Famille </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Politique de confidantialitée</a>
                        <a href="#!">Condition d&apos;utilisation</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
