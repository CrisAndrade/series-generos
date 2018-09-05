<!DOCTYPE html>
<html lang="en">

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/series">SERIES&GENEROS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <div class="justify-content-end">
                    <form class="form-inline my-2 my-lg-0 pd_left">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="justify-content-end">
                    <form class="form-inline my-2 my-lg-0 pd_left">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Carrinho</button>
                    </form>
                </div>
            </div>
        </nav>

        <div style="width: 100%; padding: 20px;">
            <center>
            <h1 class="display-4">Series&Generos</h1>
            </center>
        </div>

        <ul class="nav justify-content-center">
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
            <li class="nav-item">
                <a class="nav-link disabled hover" href="#">RELACIONAR SERIES E GENERO</a>
            </li>
        </ul>

        <hr>

    </header>

    @yield('conteudo')

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
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
</html>