<x-layout.main>
    
<h1 class=" row display flex-column align-content-center  ">I nostri servizi</h1>

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

</x-layout.main>