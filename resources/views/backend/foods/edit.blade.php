@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">Food Edit Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('foods.update',$food->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		@error('name')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label"><b>Name</b></label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" value="{{$food->name}}">
			</div>
		</div>
		
		@error('price')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label"><b>Price</b></label>
			<div class="col-sm-10">
				<input type="number" class="form-control" name="price" value="{{$food->price}}">
			</div>
		</div>
		@error('photo')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label"><b>Photo</b></label>
			<div class="col-sm-10">
				<input type="file" class="form-control" name="photo" ><img src="{{asset($food->photo)}}" class="img-fluid w-50">
				<input type="hidden" name="oldphoto" value="{{$food->photo}}">
			</div>
		</div>
		@error('codeno')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label"><b>Code No</b></label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="codeno" value="{{$food->codeno}}" readonly="readonly">
			</div>
		</div>

		@error('subcategory')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror

		<div class="form-group row">

			<label class="col-sm-3 col-form-label"><b>Subcategory</b></label>

			<div class="col-sm-9">
				<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
					<optgroup label="Choose Subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}" 
							@if($subcategory->id == $food->subcategory_id) {{'selected'}} 
							@endif>
							{{$subcategory->name}}
						</option>
							
						@endforeach

					</optgroup>

				</select>
			</div>
		</div>
		
		

					
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Update" name="btnsubmit">
		</div>
	</form>
</div>
@endsection