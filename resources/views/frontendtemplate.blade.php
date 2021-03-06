<!DOCTYPE html>
<html lang="en">
  <head>
<<<<<<< HEAD
    <title>Food Restaurant Management System</title>
=======
    <title>Food Restaurant Management System </title>
>>>>>>> 7bb80e1b296881d03e25c89665cea2e84f2d65fa
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Union<small>Restaurant</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('menupage')}}" class="nav-link">Menu</a></li>
            
	          {{-- <li class="nav-item"><a href="{{route('servicepage')}}" class="nav-link">Services</a></li> --}}
	          {{-- <li class="nav-item"><a href="{{route('blogpage')}}" class="nav-link">Blog</a></li> --}}
	          <li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
	         {{--  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="{{route('shoppage')}}">Shop</a>
                <a class="dropdown-item" href="{{route('productSinglepage')}}">Single Product</a>
                <a class="dropdown-item" href="{{route('cartpage')}}">Cart</a>
               
              </div>
            </li> --}}
	          <li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
	          <li class="nav-item cart"><a href="{{route('cartpage')}}" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small id="cartNoti"></small></span></a></li>

          <div class="col-lg-4 col-10">
            @role('Customer')
            <span class="float-right d-xl-block d-lg-block d-none">
              <a id="navbarDropdown" class="nav-link dropdown-toggle loginlink" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{Auth::user()->name}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </span>
          @else
          <span class="float-left d-xl-block d-lg-block d-none my-3">
            <a href="{{route('checkoutpage')}}" class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right">Register </a><a href="{{route('loginpage')}}" class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right"> Login | </a>

          </span>
         {{--  <li class="nav-item"><a href="{{route('loginpage')}}" class="nav-link">Login</a></li>

            <li class="nav-item"><a href="{{route('checkoutpage')}}" class="nav-link">Checkout</a></li> --}}
          @endrole

        </div>

	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hour</h2>
              <h5>Open Monday-Friday</h5>
              <p>8:00am - 9:00pm</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        {{--   <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">09-787926608</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">eimarhtun@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Restaurant is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Union</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('frontend/js/aos.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('frontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('frontend/js/google-map.js')}}"></script>
  <script src="{{ asset('frontend/js/main.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/localstorage_custom.js')}}"></script>
<<<<<<< HEAD
   @include('sweetalert::alert',['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) 
   @include('sweetalert::alert')
=======
    @yield('script')
>>>>>>> 7bb80e1b296881d03e25c89665cea2e84f2d65fa
  </body>
</html>