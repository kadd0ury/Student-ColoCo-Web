<div class="site-wrap">
<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->
<div class="site-navbar">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-8 col-md-8 col-lg-4">
          <h1 class=""><a href="/" class="h5 text-uppercase text-black"><strong>Student-<span class="text-danger">ColoCo</span></strong></a></h1>
        </div>
        <div class="col-4 col-md-4 col-lg-8">
          <nav class="site-navigation text-right text-md-right" role="navigation">

            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="active">
                <a href="/">Home</a>
              </li>
              <li class="has-children">
                <a href="properties.html">Offres</a>
                <ul class="dropdown">
                  <li><a href="{{route('listoffres')}}">Les offres co-locations</a></li>
                  <li><a href="{{route('offres.create')}}">Déposer une offre</a></li>
                  <li><a href="{{route('offres.index')}}">Mes Offres</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="properties.html">Demandes</a>
                <ul class="dropdown">
                  <li><a href="{{route('listdemande')}}">Les demandes co-locations</a></li>
                  <li><a href="{{route('demandes.create')}}">Déposer une demande</a></li>
                  <li><a href="{{route('demandes.index')}}">Mes demandes</a></li>
                </ul>
              </li>
              <li><a href="#">@include('partials.auth')</a></li>
            </ul>
          </nav>
        </div>
       

      </div>
    </div>
  </div>
</div>
