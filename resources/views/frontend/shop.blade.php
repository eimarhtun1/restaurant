@extends('frontendtemplate')
@section('content')
<section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url({{ asset('frontend/images/wall3.jpg')}});" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row slider-text justify-content-center align-items-center">

<div class="col-md-7 col-sm-12 text-center ftco-animate">
<h1 class="mb-3 mt-5 bread">Order Online</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span></p>
</div>

</div>
</div>
</div>
</section>


<section class="ftco-menu mb-5 pb-5">
<div class="container">
<div class="row d-md-flex">
<div class="col-lg-12 ftco-animate p-md-5">
<div class="row">
<div class="col-md-12 nav-link-wrap mb-5">
{{-- pk --}}
{{-- <div class="navbar">
	@foreach($categories as $category)
	
		<div>
		 <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="" aria-haspopup="true" aria-expanded="false">
		   {{ $category->name}}
		 </a>
		<div class="" aria-labelledby="dropdownMenuLink">
		    @foreach($category->subcategories as $subcategory)
		  	 <div>
		  	 	{{url("food/$subcategory->id")}}
		  	 	<a class="" href="">{{$subcategory->name}}</a>
		  	 </div>
		    @endforeach
		</div>
    </div>
  @endforeach
</div>
</div>

@foreach($foods as $food)
		  	 	<p>
		  	 		{{$food->name}}
		  	 		<img src="{{$food->photo}}" width="100" height="100">
		  	 	</p>
		  	 @endforeach
		  	 <br><br><br><br><br><br><br><br><br><br><br><br>
 --}}
{{-- example --}}
{{-- <div class="container subNav d-xl-block d-lg-block d-none my-3">
    <div class="row align-items-center">
      <div class="col-3 align-items-center">
       

        <div class="nav d-inline-block">
        	
            <a class="nav-item text-decoration-none text-dark font-weight-bold d-block"  id="navbarDropdownMenuLink" data-toggle="dropdown" >
              <span class="mr-2"> Category </span>
                  
            <i class="icofont-rounded-down pt-2"></i>

              </a>
              <div class="dropdown-menu" >
                @foreach($categories as $category)
                  <div class="dropdown-submenu">
                    <a class="navbar" >
                      {{$category->name}}
                      
                    </a>
                    <div class="dropdown-menu">
                      
                      @foreach($category->subcategories as $subcategory)
                        <div><a class="dropdown-item" href="">{{$subcategory->name}}</a></div>
                      @endforeach
                    </div>
                  </div>
                 
                @endforeach
              </div>
            </div>
      </div>

      <div class="col-3">
        <a href="" class="text-decoration-none text-dark font-weight-bold"> Promotions </a>
      </div>
      <div class="col-3">
        <div class="hov-dropdown d-inline-block">
                <a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2"> Merchants </span>
            <i class="icofont-rounded-down pt-2"></i>

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="#">Action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
      </div>

      <div class="col-3">
        <div class="hov-dropdown d-inline-block">
                <a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2"> Services </span>
            <i class="icofont-rounded-down pt-2"></i>

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="#">
                    Help Center
                  </a>
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item" href="#">
                    Order
                  </a>
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item" href="#">
                    Shipping & Delivery
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    Payment
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    Returns & Refunds
                  </a>

                </div>
            </div>
      </div>
    </div>
  </div> --}}
  
  

{{-- end example --}}
</div>
<div class="col-md-12 d-flex align-items-center">

<div class="tab-content ftco-animate" id="v-pills-tabContent">

<<<<<<< HEAD
	<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
		<div class="row">
			<div class="col-md-3">
				<div class="menu-entry">
					<a href="#" class="img" style="background-image: url({{ asset('frondent/images/menu-1.jpg')}});"></a>
					<div class="text text-center pt-4">
						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						<p>A small river named Duden flows by their place and supplies</p>
						<p class="price"><span>$5.90</span></p>
						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="menu-entry">
					<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-2.jpg')}});"></a>
					<div class="text text-center pt-4">
						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						<p>A small river named Duden flows by their place and supplies</p>
						<p class="price"><span>$5.90</span></p>
						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="menu-entry">
					<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-3.jpg')}});"></a>
					<div class="text text-center pt-4">
						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						<p>A small river named Duden flows by their place and supplies</p>
						<p class="price"><span>$5.90</span></p>
						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="menu-entry">
					<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-4.jpg')}};"></a>
					<div class="text text-center pt-4">
						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						<p>A small river named Duden flows by their place and supplies</p>
						<p class="price"><span>$5.90</span></p>
						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
=======
		              <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
		              	<div class="row">
		              		<div class="col-md-3">
						        		<div class="menu-entry">
						    					<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-1.jpg')}});"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						    						<p>A small river named Duden flows by their place and supplies</p>
						    						<p class="price"><span>$5.90</span></p>
						    						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>
						        	<div class="col-md-3">
						        		<div class="menu-entry">
						    					<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-2.jpg')}});"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						    						<p>A small river named Duden flows by their place and supplies</p>
						    						<p class="price"><span>$5.90</span></p>
						    						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>
						        	<div class="col-md-3">
						        		<div class="menu-entry">
						    					<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-3.jpg')}});"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						    						<p>A small river named Duden flows by their place and supplies</p>
						    						<p class="price"><span>$5.90</span></p>
						    						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>
						        	<div class="col-md-3">
						        		<div class="menu-entry">
						    					<a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-4.jpg')}};"></a>
						    					<div class="text text-center pt-4">
						    						<h3><a href="product-single.html">Coffee Capuccino</a></h3>
						    						<p>A small river named Duden flows by their place and supplies</p>
						    						<p class="price"><span>$5.90</span></p>
						    						<p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
						    					</div>
						    				</div>
						        	</div>
		              	</div>
		              </div>
>>>>>>> 7bb80e1b296881d03e25c89665cea2e84f2d65fa

	<div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
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
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection