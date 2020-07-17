@extends('mainlayout')


@section('pres')
<div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-house"></span>
              <div class="text">
                <h2 class="mt-0">Maisons</h2>
                <p>Grace à cete platforme vous pouvez facilement trouver des maisons à louer avec des prix raisonnable.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-rent"></span>
              <div class="text">
                <h2 class="mt-0">Chambres</h2>
                <p>Vous n'avez pas besoin de louer toute la maison ,ici des colocataires vous propose de partager avec eux la maison et de payer juste le prix d'une maison.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-location"></span>
              <div class="text">
                <h2 class="mt-0">Garsonieres</h2>
                <p>Vous aimez d'habiter tout seul ,Student ColoCo vous offre la posibilite des contater propriétaire ayant des Garsonieres à louer avec des bon prix </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection 
@section('offres')
<div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h3>Offres Co-Locations</h3>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.html" class="prop-entry d-block">
              <figure>
                <img src="{{URL::asset('tempres/images/img_1.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$1,930,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.html" class="prop-entry d-block">
              <figure>
                <img src="{{URL::asset('tempres/images/img_2.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$2,438,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.html" class="prop-entry d-block">
              <figure>
                <img src="{{URL::asset('tempres/images/img_3.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$5,320,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.html" class="prop-entry d-block">
              <figure>
                <img src="{{URL::asset('tempres/images/img_4.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$2,350,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.html" class="prop-entry d-block">
              <figure>
                <img src="{{URL::asset('tempres/images/img_5.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$1,550,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.html" class="prop-entry d-block">
              <figure>
                <img src="{{URL::asset('tempres/images/img_6.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$4,291,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div>
        
      </div>
    </div>

@endsection
@section('demandes')
<div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center mb-5">
            <div class="site-section-title">
              <h3>Les Demandes Co-Locations</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Research Subburbs</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-sold"></span>
              <h2 class="service-heading">Sold Houses</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-camera"></span>
              <h2 class="service-heading">Security Priority</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Research Subburbs</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-sold"></span>
              <h2 class="service-heading">Sold Houses</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-camera"></span>
              <h2 class="service-heading">Security Priority</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('four')
<div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h3>Nos fournisseurs des logements</h3>
          </div>
        </div>
      </div>
      <div class="row block-13">

        <div class="nonloop-block-13 owl-carousel">

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_3.jpg')
            }}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{URL::asset('tempres/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

        </div>

        </div>
      </div>
    </div>

    @endsection

    @section('beforefooter')
    <div class="site-section site-section-sm bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Wide Range of Properties Just For You</h2>
            <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-md-4 text-center">
            <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
          </div>
        </div>
      </div>
    </div>
    @endsection



