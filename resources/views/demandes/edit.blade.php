@extends('mainlayout')

@section('content')

<br>
<div class="row">
    <div class="col-12" style="text-align: center;"><strong>Modifier une Demande</strong></div>
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
  
    <form action="{{ route('demandes.update',$demande->id) }}" method="POST" class="p-5 bg-white border">
        @csrf
        @method('PUT')
   
         <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="type">Type</label>
                  <SELECT name="type" size="1" class="form-control" value="{{ $demande->type }}">
                  <OPTION>Appartement
                  <OPTION>Maison
                  <OPTION>Garsoniere
                  <OPTION>Chambre
                 </SELECT>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="prixmax">Budget(Dhs)</label>
                  <input type="number" name="prixmax" id="prixmax" style ="height: 33px;" value="{{ $demande->prixmax }}" class="form-control" placeholder="budget maximal">
                </div>

              </div>

              <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="description">Description</label>
                  <input type="text" name="description" id="description" style ="height: 33px;" value="{{ $demande->description }}"  class="form-control" placeholder="votre commentaire">
                </div>
  					<div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="tele">Téléphone</label>
                  <input type="number" name="tele" id="tele" style ="height: 33px;"  value="{{ $demande->tele }}" class="form-control" placeholder="Phone number">
                </div>
              </div>

              <div class="row form-group">
              <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label class="font-weight-bold" for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse" style ="height: 41px;" value="{{ $demande->adresse}}"  class="form-control" placeholder="Où vous cherchez le logment">
            </div>
        </div>
             

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('demandes.index') }}"> retour</a>
            </div>
            </div>
           
     

        <br>
   
    </form>
@endsection