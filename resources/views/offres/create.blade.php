@extends('mainlayout')


@section('style-map')
<style>
    #mapid {
        height: 500px;
    }
</style>
@endsection

@section('all-css-map')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
@endsection



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


<div id="mapid"></div>
<br>
<div class="row">
    <div class="col-12" style="text-align: center;"><strong>Ajouter une Offre</strong></div>
</div>

<br>


<form action="{{ route('offres.store') }}" class="p-5 bg-white border" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="type">Type</label>
            <SELECT name="type" size="1" class="form-control">
                <OPTION>Appartement
                <OPTION>Maison
                <OPTION>Garsoniere
                <OPTION>Chambre
            </SELECT>
        </div>
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="prix">Prix(Dhs)</label>
            <input type="number" name="prix" id="prix" style="height: 33px;" class="form-control" placeholder="Prix">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="adresseX">Latitude</label>
            <input type="text" name="adresseX" id="adresseX" style="height: 33px;" class="form-control" placeholder="Latitude" readonly="readonly">
        </div>
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="adresseY">Longtitude</label>
            <input type="text" name="adresseY" id="adresseY" style="height: 33px;" class="form-control" placeholder="longtitude" readonly="readonly">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="Superficie">Superficie</label>
            <input type="number" name="superficie" id="superficie" style="height: 33px;" class="form-control" placeholder="m2">
        </div>
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="capacite">Capacité</label>
            <input type="number" name="capacite" id="	capacite" style="height: 33px;" class="form-control" placeholder="nombres de personnes">
        </div>
    </div>


    <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="tele">Téléphone</label>
            <input type="number" name="tele" id="tele" style="height: 33px;" class="form-control" placeholder="phone">
        </div>

        <div class="col-md-6 mb-3 mb-md-0">
            <label class="font-weight-bold" for="commentaire">Commentaire</label>
            <input type="text" name="commentaire" id="commentaire" style="height: 33px;" class="form-control" placeholder="commentaire">
        </div>


    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image</strong>
                <input type="file" name="image[]" style="height: 41px;" class="form-control" accept="image/*" placeholder="image" multiple />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{ route('offres.index') }}">retour</a>
        </div>
    </div>
</form>
@endsection
@section('script-map')
<script>
    navigator.geolocation.getCurrentPosition(function(location) {
        var mypositionlatlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
        var mymap = L.map('mapid').setView([32.323502, -6.373058], 13);
        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=7KKuUBKRwwK43OQ26lWy', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);


        var iconposition = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
            iconSize: [25, 41],

        })



        var mymarkerposition = L.marker(mypositionlatlng, {
            icon: iconposition
        }).addTo(mymap);
        mymarkerposition.bindPopup("Ma position Actuelle").openPopup();

        //console.log(user);



        /*for (var i in user) {
            var marker = L.marker([user[i].adresseX, user[i].adresseY], {
                layerType: 'marker'
            }).addTo(mymap);

            marker.on('click',function(marker){

                L.Routing.control({
                waypoints: [
                 L.latLng(marker.latlng.lat, marker.latlng.lng),
                 L.latLng(mypositionlatlng.lat,mypositionlatlng.lng)
                 ]
                 }).addTo(mymap);

               
            

            });
            marker.bindPopup(`<b>${user[i].type}</b><br>${user[i].prix} Dhs`).openPopup();
        }
*/

        var markeroffre = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
            iconSize: [25, 41],
        })


        mymap.on('click', function(e) {
            document.getElementById("adresseX").value = e.latlng.lat;
            var marker = L.marker([e.latlng.lat, e.latlng.lng], {
                icon: markeroffre
            }).addTo(mymap);
        });
        mymap.on('click', function(e) {
            document.getElementById("adresseY").value = e.latlng.lng;
        });
    });
</script>
@endsection
@section('all-script-map')
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
@endsection