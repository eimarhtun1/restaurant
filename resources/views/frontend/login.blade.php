 @extends('frontendtemplate')
 @section('content')

 <section class="home-slider owl-carousel">

 	<div class="slider-item" style="background-image: url({{ asset('frontend/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
 		<div class="overlay"></div>
 		<div class="container">
 			<div class="row slider-text justify-content-center align-items-center">

 				<div class="col-md-7 col-sm-12 text-center ftco-animate">
 					<h1 class="mb-3 mt-5 bread">Login</h1>
 					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Login</span></p>
 				</div>

 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-section">
 	<div class="container">
 		<div class="row  justify-content-center">
 			<div class="col-xl-8 ftco-animate">
 				<form method="POST" action="{{ route('login') }}">
 					@csrf
 					<div class="form-group">
 						<label class="small mb-1" for="inputEmailAddress">Email</label>
 						<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
 					</div>

 					<div class="form-group">
 						<label class="small mb-1" for="inputPassword">Password</label>
 						<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
 					</div>

 					<div class="form-group">
 						<div class="custom-control custom-checkbox">
 							<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
 							<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
 						</div>

 						<a class="small" href="#">Forgot Password?</a>
 					</div>

 					<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
 						<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
 					</div>
 				</form>

 				<div class=" mt-3 text-center ">
 					<a href="#" class="loginLink text-decoration-none">Need an account? Sign Up!</a>
 				</div>

 			</div> <!-- .col-md-8 -->
 		</div>
 	</div>
 </section> <!-- .section -->
 @endsection