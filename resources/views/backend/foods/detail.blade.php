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
			<p>{{$food->name}}</p>
			<p>{{$food->price}}</p>
			<p>{{$food->photo}}</p>
			<p>{{$food->codeno}}</p>
			<p>{{$food->subcategory->name}}</p>	

		</div>		
</div>
</div>


@endsection