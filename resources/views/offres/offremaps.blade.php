@extends('mainlayout')
@section('style-map')
<style>
    #mapid {
        height: 1000px;
    }
</style>
@endsection

@section('all-css-map')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
@endsection
@section('content')





<div id="mapid"></div>





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

     

        var iconposition  = L.icon({
        iconUrl : 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
        iconSize:[25,41],
        })


        var markeroffre  = L.icon({
        iconUrl : 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
        iconSize:[25,41],
        })



        var mymarkerposition = L.marker(mypositionlatlng,{icon:iconposition}).addTo(mymap);
        mymarkerposition.bindPopup("Ma position Actuelle").openPopup();


        
      //  var test = L.marker([32.323502, -6.373058],{icon:iconposition}).addTo(mymap);
       // test.bindPopup("test").openPopup();

        for (var i in offres) {
            var marker = L.marker([offres[i].adresseX, offres[i].adresseY],{icon:markeroffre}).addTo(mymap);

            marker.on('click',function(marker){

             L.Routing.control({
              waypoints: [
               L.latLng(marker.latlng.lat, marker.latlng.lng),
               L.latLng(mypositionlatlng.lat,mypositionlatlng.lng)
              ]
             }).addTo(mymap);
           });
            marker.bindPopup(`<b>${offres[i].type}</b><br>${offres[i].prix} Dhs`).openPopup();
        }
    });
</script>
@endsection

@section('all-script-map')
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
@endsection
