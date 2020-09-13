
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <link rel="icon" href="{{asset('image/logomeapng.png')}}" type="image/x-icon">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href="{{ asset('logomeapng.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    @yield('links')

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Menistério Envagelho Em Acção</h3>
                <strong>MEA</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-graduate"></i>
                        Aluno
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/aluno/cadastro">Cadastrar</a>
                        </li>
                        <li>
                            <a href="{{route('alunolistagem.index')}}">Editar</a>
                        </li>

                    </ul>
                </li>
                <li>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-chalkboard-teacher"></i>
                        Professor
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="/professor/cadastro">Cadastrar</a>
                        </li>
                        <li>
                            <a href="#">Editar</a>
                        </li>
                        <li>
                            <a href="#">Alocar a uma Turma</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#escolaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-school"></i>
                        Escola
                    </a>
                    <ul class="collapse list-unstyled" id="escolaSubmenu">
                        <li>
                            <a href="/escola/cadastro">Criar</a>
                        </li>
                        <li>
                            <a href="#">Editar</a>
                        </li>

                    </ul>
                    <a href="#turmaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-address-card"></i>
                        Turma
                    </a>
                    <ul class="collapse list-unstyled" id="turmaSubmenu">
                        <li>
                            <a href="/turma/cadastro">Criar</a>
                        </li>
                        <li>
                            <a href="#">Editar</a>
                        </li>

                    </ul>
                    <a href="#areaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-address-card"></i>
                        Área
                    </a>
                    <ul class="collapse list-unstyled" id="areaSubmenu">
                        <li>
                            <a href="/area/cadastro">Criar</a>
                        </li>
                        <li>
                            <a href="#">Editar</a>
                        </li>

                    </ul>

                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-money-bill"></i>
                        Coletas
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        Sobre
                    </a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-danger d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Aluno</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Professor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Turma</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Escola</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Área</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Coleta</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            @if(Auth::user())
                            <li class="nav-item">
                                <a href="" class="nav-link">{{Auth::user()->name}}</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('conteudo')



        </div>
    </div>
    @yield('scripts')
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="{{ asset('js/popper.js/dist/popper.min.js')}}" ></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('css/bootstrap.min.js')}}" ></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
