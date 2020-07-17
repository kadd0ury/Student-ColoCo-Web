@extends('mainlayout')
@section('offres')
<div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h3>Les Offres de Co-Locations disponibles :</h3>
              <a class="btn btn-success pull-right" href="{{ route('maps') }}">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
                Maps
                </a>
            </div>
          </div>
        </div>
        <div class="row mb-5">
      

          @foreach($listeoffres as $offre)
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="{{route('details',$offre->id)}}" class="prop-entry d-block">
              <figure>
  
                <img src="{{asset('images/'.json_decode($offre->image)[0])}}" alt="Image" class="img-fluid">
              </figure>
            
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">{{$offre->prix}} MAD</span>
                  <h3 class="title">Type:{{$offre->type}} </h3>
                  <p class="location">{{$offre->dateOffre}}</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>{{$offre->superficie}} m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Capacité:</span>
                      <strong>{{$offre->capacite}}</strong>
                    </div>
                    <div class="col">
                      <span>Téléphone:</span>
                      <strong>{{$offre->tele}}</strong>
                    </div>
                    <div class="col">
                      <span>Commentaires:</span>
                      <strong>{{$offre->commentaire}}</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        @endforeach



        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div>
        
      </div>
    </div>
@endsection