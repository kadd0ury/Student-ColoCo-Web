@extends('mainlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Détail demande</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('demandes.index') }}"> retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>prix:</strong>
                {{ $demande->prixmax }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type</strong>
                {{ $demande->type }}
            </div>
        </div>
    </div>
@endsection