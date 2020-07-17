@extends('mainlayout')


@section('content')
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


<br>
<div class="row">
    <div class="col-12" style="text-align: center;"><strong>Ajouter une demande</strong></div>
</div>

<br>


<form action="{{ route('demandes.store') }}"  class ="p-5 bg-white border" method="POST">
    @csrf

    <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="type">Type de logement</label>
                  <SELECT name="type" size="1" class="form-control">
                  <OPTION>Appartement
                  <OPTION>Maison
                  <OPTION>Garsoniere
                  <OPTION>Chambre
                 </SELECT>
                </div>
  					<div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="prixmax">Budget(Dhs)</label>
                  <input type="number" name="prixmax" id="prixmax" style ="height: 33px;" class="form-control" placeholder="budget maximal">
                </div>
              </div>

              <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="description">Description</label>
                  <input type="text" name="description" id="description" style ="height: 33px;"  class="form-control" placeholder="votre commentaire">
                </div>
  					<div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="tele">Téléphone</label>
                  <input type="number" name="tele" id="tele" style ="height: 33px;"  class="form-control" placeholder="Phone number">
                </div>
              </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="font-weight-bold" for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse" style ="height: 41px;"  class="form-control" placeholder="Où vous cherchez le logment">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{ route('demandes.index') }}">retour</a>
        </div> 
    </div>
</form>
@endsection