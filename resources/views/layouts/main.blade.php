<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- css -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link href="css/style.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
        <script src="\js\boostrap.js"></script>

    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">
                <img src="/img/icon1.png">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/concurso">Nova Inscrição</a>
                    </li>
                      
                    <li class="nav-item">
                      <a class="nav-link" href="/meus_concursos">Meus Concursos</a>
                  </li>
                </ul>

                @auth
                <a href="/user/profile"><button class="btn btn-outline-success my-2 my-sm-0">Meu Painel</button></a>    
                @endauth
                @guest
                    <a class="btn btn-outline-success my-2 my-sm-0" href="/login">Login</a>
                    <a class="btn btn-outline-light my-2 my-sm-0" href="/register">Cadastro</a>
                @endguest
                @auth
                    <form action="/logout" method="POST">
                      @csrf
                      <a class="btn btn-outline-danger my-2 my-sm-0" href="/logout" onclick="event.preventDefault();
                                                                  this.closest('form').submit();">Logout</a>
                    </form>
                  @endauth
            </div>
          </nav>
          @yield('content')


        <footer class="container">
            <p><p><div class="alert alert-success" role="alert">
                <strong>&copy; R.R. - Rodrigo Ribeiro</strong>
                </div>
        </footer>
      </div>
    </body>
</html>