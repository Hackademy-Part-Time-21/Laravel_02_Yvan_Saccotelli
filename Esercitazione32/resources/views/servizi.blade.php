<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <x-Navbar/>
    
<h1>Inostri servizi</h1>

<div class="row">
    @foreach ($servizi as $servizio)

    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$servizio['nome']}}</h5>
              <p class="card-text">se vuoi saperne di più di {{$servizio['nome']}}</p>
              <a href="{{route('singoloServizio',$servizio['id'])}}" class="btn btn-primary">Clicca qui</a>
            </div>
          </div>
    </div>
    @endforeach
</div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>

