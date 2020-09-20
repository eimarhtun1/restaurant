@extends('frontendtemplate')
@section('content')

<section class="home-slider owl-carousel">

	<div class="slider-item" style="background-image: url({{ asset('frontend/images/wall6.jpg')}});" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">Our Menu</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
				</div>

			</div>
		</div>
	</div>
</section>

    {{-- <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (123) 456 7890</h3>
	    						<p>A small river named Duden flows by their place and supplies.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Book a Table</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section> --}}
{{-- 
    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Starter</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-1.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Cornish - Mackerel</span></h3>
	        				<span class="price">5000 MMK</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-2.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Steak</span></h3>
	        				<span class="price">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-3.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Seasonal Soup</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-4.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chicken Curry</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Main Dish</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-5.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Sea Trout</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-6.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Beef</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-7.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Butter Fried Chicken</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dish-8.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chiken Filet</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dessert-1.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Cornish - Mackerel</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dessert-2.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Steak</span></h3>
	        				<span class="price">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dessert-3.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Seasonal Soup</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/dessert-4.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chicken Curry</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/drink-5.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Sea Trout</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/drink-6.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Beef</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/drink-7.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Butter Fried Chicken</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('frontend/images/drink-8.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chiken Filet</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section> --}}
    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row d-md-flex">
    			<div class="col-lg-12 ftco-animate p-md-5">
    				<div class="row">

    					<div class="col-md-12 nav-link-wrap mb-5">
    						<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

		            {{-- <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0" role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee</a>
		            	

		              <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false">Main Dish</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a> --}}
		              <div class="dropdown">
		              	@foreach($categories as $key=>$category)
		              	<a class="btn btn-secondary dropdown-toggle btn_click btn_toogle{{$key}}" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-key = "{{$key}}" data-id = "{{$category->id}}" data-array="{{$categories}}">
		              		{{$category->name}}
		              	</a>


		              	<div class="dropdown-menu toggle_show" aria-labelledby="dropdownMenuLink">
		              		{{-- @foreach($subcategories as $subcategory) --}}
		              		
		              		
		              		{{-- @endforeach --}}
		              		
		              </div>
		              	@endforeach
		              </div>



		          </div>
		      </div>
		      <div class="col-md-12 d-flex align-items-center">

		      	<div class="tab-content ftco-animate" id="v-pills-tabContent">

		      		<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
		      			<div class="row">
		      				<div class="col-md-3">
		      					<div class="menu-entry">
		      						{{--  @foreach($category->$subcategory->$foods as $food)
		      						<li>
		      							@if($category->id==$subcategory->category_id)
		      							<a href="{{route('menupage')}}" class="img" style="background-image: url({{ asset($food->photo)}});"></a>
		      							@endif
		      						</li>
		      						@endforeach
		      						 --}}
		          						{{-- <div class="text text-center pt-4">
		          							<h3><a href="product-single.html">Coffee Capuccino</a></h3>
		          							<p>A small river named Duden flows by their place and supplies</p>
		          							<p class="price"><span>$5.90</span></p>
		          							<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
		          						</div> --}}
		          					</div>
		          				</div>
		          				{{-- <div class="col-md-3">
		          					<div class="menu-entry">
		          						<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-2.jpg')}});"></a>
		          						<div class="text text-center pt-4">
		          							<h3><a href="product-single.html">Coffee Capuccino</a></h3>
		          							<p>A small river named Duden flows by their place and supplies</p>
		          							<p class="price"><span>$5.90</span></p>
		          							<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
		          						</div>
		          					</div>
		          				</div> --}}
		          				{{-- <div class="col-md-3">
		          					<div class="menu-entry">
		          						<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-3.jpg')}});"></a>
		          						<div class="text text-center pt-4">
		          							<h3><a href="product-single.html">Coffee Capuccino</a></h3>
		          							<p>A small river named Duden flows by their place and supplies</p>
		          							<p class="price"><span>$5.90</span></p>
		          							<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
		          						</div>
		          					</div>
		          				</div> --}}
		          				{{-- <div class="col-md-3">
		          					<div class="menu-entry">
		          						<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-4.jpg')}};"></a>
		          						<div class="text text-center pt-4">
		          							<h3><a href="product-single.html">Coffee Capuccino</a></h3>
		          							<p>A small river named Duden flows by their place and supplies</p>
		          							<p class="price"><span>$5.90</span></p>
		          							<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
		          						</div>
		          					</div>
		          				</div> --}}
		          			</div>
		          		</div>




		              {{-- <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-1.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-2.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-3.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-4.jpg')}};"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-5.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-6.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-1.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-2.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-3.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-4.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-5.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-6.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-1.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-2.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-3.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-4.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-5.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-6.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="product-single.html">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div> --}}
		          </div>
		      </div>
		  </div>
		</div>
	</div>
</div>
</section>

    {{-- <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		            	
		                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Main Dish</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a>
		             

		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center"> --}}
		          	{{-- foods --}}
		          	{{-- <div class="row"> --}}
         {{--  aa@foreach($foods as $food)
        	<div class="col-md-3">
        		<div class="menu-entry"> --}}
        			{{-- <a href="#" class="img" style="background-image: url({{ asset('$food->photo')}});"></a> --}}
              {{-- aa<img src="{{asset($food->photo)}}" class="card-img-top" alt="...">
    					aa<div class="text text-center pt-4">
    						<h3><a href="#">{{$food->codeno}}</a></h3>
    						<h3><a href="#">{{$food->name}}</a></h3>
    						<p class="price"><span>${{$food->price}}</span></p> --}}
    						{{-- <p><a href="{{route('cartpage')}}" class="btn btn-primary btn-outline-primary add_to_cart" data-id="{{$food->id}}" data-name="{{$food->name}}" data-price="{{$food->price}}" data-photo="{{$food->photo}}"  data-codeno="{{$food->codeno}} >Add to Cart</a></p> --}}
    						{{-- <p><button class="btn btn-primary btn-outline-primary add_to_cart" data-id="{{$food->id}}" data-name="{{$food->name}}" data-price="{{$food->price}}" data-photo="{{$food->photo}}"  data-codeno="{{$food->codeno}}">Add To Cart</button></p> --}}
    					{{-- </div> --}}
    		{{-- 		</div>
        	</div>
          
        	
        </div> --}}
        {{-- end foods --}}

		            {{-- <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-1.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-2.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-3.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-4.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-5.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dish-6.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-1.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-2.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-3.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-4.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-5.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/drink-6.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-1.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-2.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-3.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-4.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-5.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('frontend/images/dessert-6.jpg')}});"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		          </div> --}}
		      </div>
		  </div>
		</div>
	</div>
</div>
</section>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
		$('.btn_click').click(function(){
			var key = $(this).data('key');
			var data_array = $(this).data('array');
			var id = $(this).data(id);
			for (var i = 0; i < data_array.length; i++) {
				if(i==key)
			alert(i==key);

				{
					// alert('mess/age?: DOMString');
					$.post('/filtersubcategory',{id:id},function(res){
						console.log(res);
						var html = '';
						$.each(res,function(i,v){
							console.log(v);
							html+=`<li><a class="dropdown-item bg-secondary text-white" href="{{route('food',:id)}}"> ${v.name}</a></li>`
						});
						html = html.replace(':id',v.id);
						$('.toggle_show').html(html);
					})
				}
			}
		})
	})
</script>
@endsection