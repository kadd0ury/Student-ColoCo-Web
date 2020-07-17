@extends('mainlayout')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb" style="text-align: center;">
         
                <h3>Mes Demandes Co-locations</h3>
                <a class="btn btn-success" href="{{ route('demandes.create') }}">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>
          
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <br>
   <div class="container">
    <table class="table table-bordered">
        <tr>
        
            <th>Type</th>
            <th>Prix(Dhs)</th>
            <th>Téléphone</th>
            <th>Date de demande</th>
            <th>Description</th>
            <th>Adresse</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($demandes as $demande)
        <tr>
            <td>{{$demande->type}}</td>
            <td>{{ $demande->prixmax}}</td>
            <td>{{ $demande->tele}}</td>
            <td>{{ $demande->dateOffre}}</td>
            <td>{{ $demande->description}}</td>
            <td>{{ $demande->adresse}}</td>
            <td>
                <form action="{{ route('demandes.destroy',$demande->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('demandes.show',$demande->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('demandes.edit',$demande->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
  
    {!! $demandes->links() !!}
@endsection
<br><br>