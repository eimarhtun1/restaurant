@extends('frontendtemplate')
@section('content')

<section class="home-slider owl-carousel">

  <div class="slider-item" style="background-image: url({{ asset('frontend/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
     <div class="overlay"></div>
     <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
           <h1 class="mb-3 mt-5 bread">Cart</h1>
           <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
       </div>

   </div>
</div>
</div>
</section>

<section class="ftco-section ftco-cart">
 <div class="container">
    <div class="row">
     <div class="col-md-12 ftco-animate">
        <div class="cart-list">
           <table class="table">
              <thead class="thead-primary">
                <tr class="text-center">
                  <th></th>
                  <th></th>
                  <th>Product</th>
                  <th>Price</th>
                  <th colspan="5">Quantity</th>
                  <th>Total</th>
              </tr>
          </thead>
          <tbody id="shoppingcart_table">
						      {{-- <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url({{ asset('frontend/images/menu-2.jpg')}});"></div></td>
						        
						        <td class="product-name">
						        	<h3>Creamy Latte Coffee</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$4.90</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$4.90</td>
                            </tr> --}}<!-- END TR-->

						      {{-- <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url({{ asset('frontend/images/dish-2.jpg')}});"></div></td>
						        
						        <td class="product-name">
						        	<h3>Grilled Ribs Beef</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
                            </tr> --}}<!-- END TR-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
         <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
               <h3>Cart Totals</h3>
               <p class="d-flex">
                  <span>Subtotal</span>
                  <span id="totalprice"></span>
              </p>
              
              <p class="d-flex">
                  <span>Discount</span>
                  <span id="discount"></span>
              </p>
              <hr>
              <p class="d-flex total-price">
                  <span>Total</span>
                  <span id="alltotal"></span>
              </p>
                       {{--  <table class="table">
                            <thead class="thead-primary">
                              <tr class="text-center">
                                <th>Subtotal</th>
                                <th>Subtotal</th>
                                <th>Discount</th>
                                <th>Total</th>
                                
                              </tr>
                            </thead>
                            <tbody id="shoppingcart_table">
                            </tbody>
                        </table> --}}

                    </div>
                    @role("Customer")
                    <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
                        Proceed Check Out 
                    </button>
                    @else
                    <a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor "> 
                        Login To Check Out 
                    </a>
                    @endrole
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-7 heading-section ftco-animate text-center">
                 <span class="subheading">Discover</span>
                 <h2 class="mb-4">Related products</h2>
                 <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
             </div>
         </div>
         <div class="row">
           <div class="col-md-3">
              <div class="menu-entry">
               <a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-1.jpg')}});"></a>
               <div class="text text-center pt-4">
                  <h3><a href="#">Coffee Capuccino</a></h3>
                  <p>A small river named Duden flows by their place and supplies</p>
                  <p class="price"><span>$5.90</span></p>
                  <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="menu-entry">
           <a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-2.jpg')}});"></a>
           <div class="text text-center pt-4">
              <h3><a href="#">Coffee Capuccino</a></h3>
              <p>A small river named Duden flows by their place and supplies</p>
              <p class="price"><span>$5.90</span></p>
              <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
          </div>
      </div>
  </div>
  <div class="col-md-3">
      <div class="menu-entry">
       <a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-3.jpg')}});"></a>
       <div class="text text-center pt-4">
          <h3><a href="#">Coffee Capuccino</a></h3>
          <p>A small river named Duden flows by their place and supplies</p>
          <p class="price"><span>$5.90</span></p>
          <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
      </div>
  </div>
</div>
<div class="col-md-3">
  <div class="menu-entry">
   <a href="#" class="img" style="background-image: url({{ asset('frontend/images/menu-4.jpg')}});"></a>
   <div class="text text-center pt-4">
      <h3><a href="#">Coffee Capuccino</a></h3>
      <p>A small river named Duden flows by their place and supplies</p>
      <p class="price"><span>$5.90</span></p>
      <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
  </div>
</div>
</div>
</div>
</div>
</section>
@endsection