@extends('mainlayout')
 


@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb" style="text-align: center;">
         
                <h3>Mes Offres Co-locations</h3>
          
         
                <a class="btn btn-success" href="{{ route('offres.create') }}">
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
            <th>Sperficie(m2)</th>
            <th>Capacité(personnes)</th>
            <th>Téléphone</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($offres as $offre)
        <tr>
            <td>{{$offre->type }}</td>
            <td>{{ $offre->prix }}</td>
            <td>{{ $offre->superficie }}</td>
            <td>{{ $offre->capacite }}</td>
            <td>{{ $offre->tele }}</td>
            <td>
                <form action="{{ route('offres.destroy',$offre->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('offres.show',$offre->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('offres.edit',$offre->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
  
    {!! $offres->links() !!}
      
@endsection
<br><br>