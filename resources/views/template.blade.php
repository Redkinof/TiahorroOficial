<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Tiahorro')</title>
        <link rel="stylesheet" type="text/css" href="{!! asset('css/styles.css') !!}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="icon" href="{!! asset('imgs/logo.ico') !!}" type="image/x-icon">
        <script src="https://kit.fontawesome.com/8d16f4c49c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="fondo" id="arriba">
            <header id="header">
                <nav class="menu">
                    <div class="logo">
                        <a href="/"><img src="{{asset('imgs/logo.png')}}" alt=""></a>
                        <a href="#" class="btn-menu" id="btnMenu"><i class="icono fas fa-bars"></i></a>
                    </div>

                    <div class="enlaces" id="enlaces">
                        <a href="/"><i class="fas fa-home"></i> Inicio</a>
                        {{-- <a href="/QuienesSomos"><i class="fas fa-users"></i> Quienes somos</a> --}}
                        <a href="#faq"><i class="fas fa-question-circle"></i> FAQ</a>
                        <a href="{{ route('login') }}"> <i class="fas fa-user-circle"></i></a>
                        {{-- <a href="/SignIn"><i class="fas fa-user-circle"></i> Sign In</a> --}}
                    </div>
                </nav>
            </header>

            <div class="frase">
                <div class="h1">
                    <h1>Ahorrar nunca había sido tan fácil </h1>
                </div>
                <img src="imgs/logo.png" alt="">
            </div>
        </div>

        <main class="style-contenido">
            @yield('views')
        </main>


        <footer>
            <div class="icono-arriba">
                <a href="#arriba"><span>Ir hacía arriba</span><i class="fas fa-angle-up"></i></a>
            </div>
            <div class="info">
                <div>
                    <img src="{{asset('imgs/logo.png')}}" alt="" class="imagen">
                </div>
                
                <div class="info-textos">
                    <h3>TIAHORRO</h3>
                    <h4>Tiahorro bank <br> Mpio. Tepic <br> Nayarit, Mexico <br> C.P. 63010</h4>
                </div>

                <div class="info-textos">
                    <h3>Teléfono</h3>
                    <h4>311 216 60 55</h4>
                </div>

                <div class="info-textos">
                    <h3>Email</h3>
                    <h4>tiahorrotepic@gmail.com</h4>
                </div>
            </div>
            <div class="derechos">
                <h5>© 2021 GRUPO TI-81, S.A. DE C.V. TODOS LOS DERECHOS RESERVADOS.</h5>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/headroom.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/categorias.js"></script>
        <script type="text/javascript" src="js/preguntas-frecuentes.js"></script>
    </body>
</html>
