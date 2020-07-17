@extends('mainlayout')

@section('content')

<br>
<div class="row">
    <div class="col-12" style="text-align: center;"><strong>Modifier une Offre</strong></div>
</div>


   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Veuillez faire attention ,il faut remplir les chmaps<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('offres.update',$offre->id) }}" method="POST" class="p-5 bg-white border">
        @csrf
        @method('PUT')
   
         <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="type">Type</label>
                  <SELECT name="type" size="1" class="form-control" value="{{ $offre->type }}">
                  <OPTION>Appartement
                  <OPTION>Maison
                  <OPTION>Garsoniere
                  <OPTION>Chambre
                 </SELECT>
                </div>
  					<div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="prix">Prix(Dhs)</label>
                  <input type="number" name="prix" id="prix" style ="height: 33px;" value="{{ $offre->prix }}" class="form-control" placeholder="Prix">
                </div>
              </div>

              <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="adresseX">Latitude</label>
                  <input type="text" name="adresseX" id="adresseX" value="{{ $offre->adresseX }}" style ="height: 33px;"  class="form-control" placeholder="Latitude" readonly="readonly">
                </div>
  					<div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="adresseY">Longtitude</label>
                  <input type="text" name="adresseY" id="adresseY"  value="{{ $offre->adresseY }}" style ="height: 33px;"  class="form-control" placeholder="longtitude" readonly="readonly">
                </div>
              </div>

              
              <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Superficie">Superficie</label>
                  <input type="number" name="superficie" value="{{ $offre->superficie }}"  id="superficie" style ="height: 33px;"  class="form-control" placeholder="m2">
                </div>
  					<div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="capacite">Capacité</label>
                  <input type="number" name="capacite" id="capacite"  value="{{ $offre->capacite}}" style ="height: 33px;"  class="form-control" placeholder="nombres de personnes">
                </div>
              </div>

              <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="tele">Téléphone</label>
                  <input type="number" name="tele" id="tele" value="{{ $offre->tele}}"  style ="height: 33px;"  class="form-control" placeholder="phone">
                </div>

                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="commentaire">Commentaire</label>
                  <input type="text" name="commentaire" value="{{ $offre->commentaire}}" id="commentaire" style ="height: 33px;"  class="form-control" placeholder="commentaire">
                </div> 
              </div>



            


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('offres.index') }}"> retour</a>
            </div>
           
     

        <br>
   
    </form>
@endsection