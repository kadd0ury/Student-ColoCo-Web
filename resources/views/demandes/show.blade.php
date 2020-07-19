@extends('mainlayout')
@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb" style="text-align: center;">
        <div class="col-12" style="text-align: center;">
            <h4>Détails de la demande</h4>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="position: relative;top: -33px;left: -23px;" href="{{ route('demandes.index') }}">
                <i class="fa fa-fast-backward" aria-hidden="true"></i> Retour</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-6 offset-md-3">



            <div class="form-group">
                <strong>Type de Logement:</strong>
                {{ $demande->type}}
            </div>


            <div class="form-group">
                <strong>Budget maximal(Dhs) : </strong>
                {{ $demande->prixmax }}
            </div>

            <div class="form-group">
                <strong>Description :</strong>
                {{ $demande->description }}
            </div>

            <div class="form-group">
                <strong>Date de la demande :</strong>
                {{ $demande->dateOffre }}
            </div>
        </div>


    </div>




</div>
<br>


@endsection