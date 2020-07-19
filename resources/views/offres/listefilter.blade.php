@extends('mainlayout')
@section('filter_option')
<div class="py-5">
      <div class="container">
        <form class="row mb-5" method="POST" action="{{ route('filter') }}">
        @csrf
        <div class="row form-group">

                <div class="col">
                  <label class="font-weight-bold" for="email">Superficie :</label>
                  <input type="number" name ="sup" id="sup" class="form-control" placeholder="en m2">
                </div>

                <div class="col">
                  <label class="font-weight-bold" for="email">Prix :</label>
                  <input type="number" name ="prix" id="prix" class="form-control" placeholder="en Dhs">
                </div>


                
              <div class="col">
                  <label class="font-weight-bold" for="email">Capacité :</label>
                  <input type="number" name ="cap" id="cap" class="form-control" placeholder="peronnes">
                </div>


                
              <div class="col">
            <label class="font-weight-bold" for="type">Type : </label>
            <SELECT name="type" size="1"  id="type" style ="height: 48px;" class="form-control">
                <OPTION>Appartement
                <OPTION>Maison
                <OPTION>Garsoniere
                <OPTION>Chambre
            </SELECT>
            
        </div>
        <div class="col">
            <input type="submit"  style="position: relative;top:33px" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Chercher">
          </div>
              </div>
              </div>
        </form>
      </div>
    </div>
@endsection
@section('offres')
<div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
     <h4>Résultat de la Recherche : <span class="badge badge-pill badge-warning">{{$offres->count()}}</span></h4>
              <a class="btn btn-success pull-right" href="{{ route('maps') }}">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
                Maps
                </a>
            </div>
          </div>
        </div>
        <div class="row mb-5">

        @if($offres->isEmpty())

        <div class="row">
      <div class="col-12">
        <p style="color:red;position:relative;left:380px">Votre Recherche ne correspond à aucune Offre !!</p>
      </div>
    </div>

    @else

          @foreach($offres as $offre)
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
        @endif
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