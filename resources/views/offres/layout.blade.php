<!DOCTYPE html>
<html>
<head>

    @yield('style-map')
    <title>Mes Offres Co-Collocations</title>
    @yield('extra-js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
     <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    
    
     <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
@yield('script-map')


</body>
</html>