@extends('layouts.main')

@section('title', 'Concurso - Inscrições')

@section('content')
    <main role="main">
       <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
       <div class="jumbotron">
        <div class="container">
          @auth
          <h1 class="display-3">Inscrições de {{$user->name}}!</h1>
          <p> </p>
          @endauth
        </div>
      </div>

        <div class="col-md-10 offset-md-1">
        <section class="mostraGames">
            @foreach ($inscricao as $inscricao)
            <h5> <b>Nome</b></h5>
              {{$inscricao->pessoa_fisica_id}}
            <h5> <b>Cargo</b></h5>
              {{$inscricao->cargo}}
              
            @endforeach
        </section>
        </div>
        
    </main>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
@endsection