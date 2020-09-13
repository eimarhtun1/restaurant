@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">Food Detail Page</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($food->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
<<<<<<< HEAD
			<p><b>Food Name: </b>{{$food->name}}</p>
			<p><b>Food Price: </b>{{$food->price}}</p>
			{{-- <p>{{$food->photo}}</p> --}}
			<p><b>Code No: </b>{{$food->codeno}}</p>
			<p><b>Category Name: </b>{{$food->subcategories->name}}</p>
=======
			<p>{{$food->name}}</p>
			<p>{{$food->price}}</p>
			<p>{{$food->photo}}</p>
			<p>{{$food->codeno}}</p>


		</div>		

			<p>{{$food->subcategories->name}}</p>
>>>>>>> 847f22a811603cd60deced983f77bcde80855d57
		</div>
		

</div>
</div>


@endsection