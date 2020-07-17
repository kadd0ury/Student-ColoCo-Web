@extends('mainlayout')
@section('content')


<div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center mb-5">
            <div class="site-section-title">
              <h3>Les Demandes de Co-Locations disponibles</h3>
            </div>
          </div>
        </div>

        @foreach ($listedemandes as $demande)
<div class="col-md-6 col-lg-4 mb-4">
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{URL::asset('images/log.png')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><strong>Adresse:</strong></h5>
    <p class="card-text">{{$demande->adresse}}</p>
   </div>
   <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Budget</strong> : <span>{{$demande->prixmax}} Dhs</span></li>
    <li class="list-group-item"><strong>Type</strong> : <span>{{$demande->type}}</span></li>
    <li class="list-group-item"><strong>Téléphone</strong> : <span>{{$demande->tele}}</span></li>
    <li class="list-group-item"><strong>Description</strong> : <span>{{$demande->description}}</span></li>
    
  </ul>
</div>
</div>
        @endforeach
      </div>
    </div>





@endsection