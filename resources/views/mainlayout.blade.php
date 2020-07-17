<!DOCTYPE html>
<html lang="en">
 <head>
 <title>@yield('title')</title>
@include('partials.head')
@yield('style-map')
@yield('all-css-map')
@yield('scriptdetails')
 </head>
 <body>
@include('partials.nav')
@include('partials.barcoloc')

@yield('contentdetails')

@yield('pres')
@yield('offres')
@yield('demandes')
@yield('four')
@yield('beforefooter')
@yield('content')
@include('partials.footer')
@include('partials.footerjs')


@yield('all-script-map')
@yield('script-map')







 </body>
</html>