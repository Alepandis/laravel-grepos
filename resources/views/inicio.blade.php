<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Repos List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-12-sm">
            <div class="jumbotron">
              <h1 class="display-4">Listado de repositorios</h1>
              <p class="lead">En esta página podrás obtener el listado de repositorios de la organizacion que ingreses</p>
              <hr class="my-4">
            </div>
          </div>
        </div>

        <form id="form_consulta" action="{{route('organizacion.consulta')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="_method" value="POST">
          <div class="row ml-4">
            <div class="card">
              <div class="card-body">
                <label for="basic-url">URL de Organización</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">https://api.github.com/users/(usuario)/repos</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" name="organizacion" aria-describedby="basic-addon3" required="true">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Consultar</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </form>
    </body>
</html>
