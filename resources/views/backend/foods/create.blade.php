@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">Food Create Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('foods.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		@error('name')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name">
			</div>
		</div>
		@error('price')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Price</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" name="price">
			</div>
		</div>
		@error('photo')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-10">
				<input type="file" class="form-control" name="photo">
			</div>
		</div>
		@error('codeno')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Code No</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="codeno">
			</div>
		</div>
		
		
		
		@error('subcategory')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			
			<label class="col-sm-2 col-form-label">Subcategory</label>
			
			<div class="col-sm-10">
				<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
					<optgroup label="Choose Subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
						@endforeach
					</optgroup>
					
				</select>
			</div>
		</div>
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Create" name="btnsubmit">
		</div>
	</form>
</div>
@endsection