@extends('layouts.main')

@section('title', 'Concurso - Incrição')

@section('content')
    <main role="main">
        <div class="jumbotron">
            <div class="container">
            <h1 class="display-3">Inscrição do Candidato</h1>
            </div>
        </div>

        <div id="concurso-create-container" class="col-md-6 offset-md-3">
            <form action="/concurso" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title"><font color="red">*</font>Nome Completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome"  value="{{$user->name}}" placeholder="{{$user->name}}"
                    required="required" oninput="this.value = this.value.replace(/[0-9]/g, '').replace(/[*-/+.;=_]/g, '');"> 
                </div>

                <div class="form-group">
                    <label for="title"><font color="red">*</font>CPF:</label> 
                    <input type="text" class="form-control" id="cpf" name="cpf"
                        placeholder="CPF" maxlength="11" 
                        required="required" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                </div>
                <div class="form-group">
                    <label for="title"><font color="red">*</font>Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required="required">
                </div>
                <div class="form-group">
                    <label for="title"><font color="red">*</font>Cargo:</label>
                    <input type="textarea" class="form-control" id="cargo" name="cargo" placeholder="Cargo" required="required">
                </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label for="title"><font color="red">*</font>Estado:</label>
                            <div class=form-group>
                                    <select name="estados_id" id="estados_id" class="form-control">
                                            @foreach ($estado as $estado)
                                            <option value="{{$estado->id}}">
                                                {{$estado->sigla}}
                                            </option>
                                            @endforeach
                                    </select>
                            </div>
                            <label for="title"><font color="red">*</font>Cidade:</label>
                            <div class=form-group>
                                    <select name="cidades_id" id="cidades_id" class="form-control">
                                        @foreach ($cidade as $cidade)
                                            <option value="{{$cidade->id}}">
                                                {{$cidade->nome}}
                                            </option>
                                        @endforeach
                                        
                                    </select>
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