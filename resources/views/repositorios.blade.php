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
      <div class="card">
        <div class="card-body">
          <label for="basic-url">URL de Organización</label>
          <p>{{ $url }}</p>
        </div>
      </div>
      <ul class="list-group">
        @foreach ($result as $resultado)
          <li class="list-group-item disabled" aria-disabled="true">{{ $resultado->name }}</li>
        @endforeach
      </ul>
    </body>
</html>
