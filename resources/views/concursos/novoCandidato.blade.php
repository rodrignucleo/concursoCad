@extends('layouts.main')

@section('title', 'Concurso - Incrição')

@section('content')
    <main role="main">
        <div class="jumbotron">
            <div class="container">
            <h1 class="display-3">Incrição do Candidato</h1>
            </div>
        </div>

        <div id="game-create-container" class="col-md-6 offset-md-3">
            <form action="/concursos_new" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nome"><font color="red">*</font>Nome Completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
                </div>
                <div class="form-group">
                    <label for="nome"><font color="red">*</font>CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf">
                </div>
                <div class="form-group">
                    <label for="nome"><font color="red">*</font>Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="endereco">
                </div>
                <div class="form-group">
                    <label for="nome"><font color="red">*</font>Cargo:</label>
                    <input type="textarea" class="form-control" id="cargo" name="cargo" placeholder="cargo">
                </div>


                <div class="form-group row">
                    <div class="col-4">
                        <label for="nome"><font color="red">*</font>Estado:</label>
                        <div class=form-group>
                            @foreach ($estado as $estado)
                            <form name="form5" method="post" action="">
                                <select name="estado[]">
                                    <option value="{{$estado->sigla}}">
                                        {{$estado->sigla}}
                                    </option>
                                </select>
                            </form>

                            @endforeach
                        </div>
                    </div>
                  </div>
                
                <input type="submit" class="btn btn-primary" value="Salvar Inscrição">
            </form>
        </div>


    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.min.js">
    </script>
@endsection