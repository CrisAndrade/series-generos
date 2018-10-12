<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>

<body style="background: white;">
    <header style="background: whitesmoke; border: solid 1px gainsboro;">
    <br/>
    <center>
        <h1 class="display-4 " style="color:gray;">SERIES & GÊNEROS</h1>
    </center>
        <br />
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled hover" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled hover" href="/series">SERIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled hover" href="/generos">GENEROS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled hover" href="/series/cadastro">CADASTRAR SERIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled hover" href="/generos/cadastro">CADASTRAR GENERO</a>
            </li>
        </ul>
    </header>
    <br />
    <br />


    @yield('conteudo')


    <br />
    <br />
    <br />
    <br /><br />


    <footer class="page-footer font-small pt-4" style="background: whitesmoke; border: solid 1px gainsboro;">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">Bem vindo!</h5>
                    <p>Visite nossas redes sociais!</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">FACEBOOK</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Cristiano de Aguiar</a>
                        </li>
                        <li>
                            <a href="#!">Leonardo Ferraz</a>
                        </li>
                        <li>
                            <a href="#!">Leonardo Donis</a>
                        </li>
                        <li>
                            <a href="#!">Juliana Oliveira</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">INSTAGRAM</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">@_cris_andrade_</a>
                        </li>
                        <li>
                            <a href="#!">@LeoFerraz07</a>
                        </li>
                        <li>
                            <a href="#!">@LeoDonis</a>
                        </li>
                        <li>
                            <a href="#!">@Juuh_Oliver_</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
</html>