@extends('layouts.main')

@section('title', 'Concurso - Home')

@section('content')
          <main role="main">
            <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
            <div class="jumbotron">
              <div class="container">
                <h1 class="display-3">Olá!</h1>
                <p> </p>
              </div>
            </div>

            <!-- Carousel de imagens com controle -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/img/banner1.png" class="img-fluid" height="700" alt="inscricao">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/img/banner1.png" class="img-fluid" height="700" alt="inscricao"> 
                </div>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
          </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
@endsection