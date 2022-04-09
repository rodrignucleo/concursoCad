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
        <section >
          @foreach  ($inscricao as $inscricao)
          <div class="form-group">
            _______________________________________________________________________________________________________________________________________________________________________________________
            <label for="title">Nº Inscrição:</label>
            <input type="text" class="form" id="id" name="id" value="{{$inscricao->id}}" disabled>
            <label for="title">Situação:</label>
            <input type="text" class="form" id="situacao" name="situacao" value="{{$inscricao->situacao}}" disabled>
            <label for="title">Data Inscrição:</label>
            <input type="text" class="form" id="date" name="situadatecao" value="{{date( 'd/m/Y' , strtotime($inscricao->created_at))}}" disabled>
          </div>

            <div class="form-group">
              <label for="title">Nome Completo:</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$user->name}}" disabled>
          </div>

          <div class="form-group">
              <label for="title">CPF:</label> 
              <input type="text" class="form-control" id="cpf" name="cpf"
                  placeholder="CPF" maxlength="11" value="{{$pessoafisica->cpf}}" disabled>
          </div>
          <div class="form-group">
              <label for="title">Endereço:</label>
              <input type="text" class="form-control" id="endereco" name="endereco" value="{{$pessoafisica->endereco}}" disabled>
          </div>
          <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="Cidade" name="Cidade" value="{{$cidade->nome}}" disabled>
            <label for="title">Estado:</label>
            <input type="textarea" class="form-control" id="estado" name="estado" value="{{$estado->sigla}}" disabled>
          </div>
          <div class="form-group">
            <label for="title">Cargo:</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="{{$inscricao->cargo}}" disabled>
          </div>
          
            
          @endforeach
        </section>
        </div>
        
    </main>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
@endsection