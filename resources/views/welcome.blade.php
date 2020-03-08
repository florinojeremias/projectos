@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEA | GESTÃO DA ESCOLA DOMINICAL </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>

        @section('content')
   <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="{{  url('/')}}"> <img src="{{ asset('image/logomeapng.png')}}" alt="iamgem nao encontrada" width="5%" height="5%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
    @if (Route::has('login'))
        @auth
             <a class="nav-link" href="{{ url('/home')}}" style="color:white;">Home<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
         @else
           <a class="nav-link" href="{{ route('login')}}" style="color:white;">Login</a>
           </li>
            @if(Route::has('register'))
             <li class="nav-item">
             <a class="nav-link" href="{{ route('register')}}" style="color:white;">Registar</a>
            @endif
      @endauth
    @endif
      </li>
    </ul>
  </div>
</nav>

</header>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('image/IMG-20191112-WA0115.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('image/IMG_20191109_153007 (2).jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('image/IMG_20191116_071510.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div>
    <h5></h5>
    </div>
    <div class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 p-2">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Aluno</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Mais detalhes
                    </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Alunos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                            <div class="modal-body">
                                            ...
                                             </div>
                                                 <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                 </div>
                             </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 p-2">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Professor</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModa">
                        Mais detalhes
                    </button>
                    <div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Professores</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                                 <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                   </div>
                             </div>
                            </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 p-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Turma</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleMod">
                        Mais detalhes
                    </button>
                    <div class="modal fade" id="exampleMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Turma</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                            <div class="modal-body">
                                            ...
                                             </div>
                                                 <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                 </div>
                             </div>
                            </div>



                </div>
            </div>
        </div>
        <div class="col-lg-6 p-2">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Coletas</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleMo">
                        Mais detalhes
                    </button>
                    <div class="modal fade" id="exampleMo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Coletas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                            <div class="modal-body">
                                            ...
                                             </div>
                                                 <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                 </div>
                             </div>
                            </div>

                </div>
            </div>
        </div>

       </div>
    </div>
    </div>
    <footer class="page-footer font-small bg-primary pt-4"  style="background-color: rgba(254, 241, 4, 0.7); background-image:url('image/56-300x200.jpg'); background-size:cover;background-position: center center;opacity: 0.9;background-color:red;">
      <div class="conatiner-fluid text-center">
       <img src="{{ asset ('image/IMG-20191114-WA0002.jpg') }}" width="5%" height="5%"  alt="">
       <p style="color:red;">O Ministério Evangelho em Acção tem como missão: Desertar o inferno e povoar o céu.</p>
       <p style="color:red;">Contacto: info@mea.org.mz</p>
       <a href="" class="fa fa-facebook" style="font-color:red;"></a>
       <a href="" class="fa fa-youtube" style="font-color:red;"></a>
      </div>
      <div class="footer-copyright bg-danger text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MEA</a>
    <p class="text-right">Desenvolvido por Florino & Yuran</p>
  </div>

    </footer>


    </body>
</html>
