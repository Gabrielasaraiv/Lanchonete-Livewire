<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $title ?? 'Lanchonete' }}</title>
    @livewireStyles
</head>

<body style="background-color: rgb(255, 240, 172)">
    <nav class="navbar border-bottom border-body" style="background-color: rgb(242, 192, 93)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lanchonete Come Bem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Lanchonete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                       
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Página
                                Inicial</a>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Configurações
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="">Editar perfil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                @if(auth()->check() && auth()->user()->role === 'funcionario' ||  auth()->user()->role === 'admin')
                                <li><a class="dropdown-item" href="#">Lista de Clientes</a></li>
                                @endif

                                @if(auth()->check() && auth()->user()->role === 'funcionario' ||  auth()->user()->role === 'admin')
                                <li><a class="dropdown-item" href="">Lista de Produtos</a></li>
                                @endif

                                @if(auth()->check() && auth()->user()->role === 'admin')
                                <li><a class="dropdown-item" href="">Lista de Funcionários</a></li>
                                @endif

                                @if(auth()->check() && auth()->user()->role === 'admin')
                                <li><a class="dropdown-item" href="">Lista de Administradores</a></li>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
    <div class='container'>
        {{ $slot }}
    </div>

    <div>
        <br>
        <footer style="background-color:rgb(242, 192, 93)">
            <div class="text-center p-3">© 2025 Copyright:
                <a class="text-body" href="...">Smart Study</a>
            </div>
        </footer>
    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
