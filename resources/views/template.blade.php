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

<body>
    <header>
    <br/>
    <center>
        <h1 class="display-4">Series&Generos</h1>
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
        <hr>
    </header>


    @yield('conteudo')


    <br />
    <br />
    <br />
    <br /><br />

    <footer class="page-footer font-small pt-4">
        <hr>
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
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