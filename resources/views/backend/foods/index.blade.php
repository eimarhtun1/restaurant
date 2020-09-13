@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between">
		<h1 class="h3 mb-0 text-gray-800 ">Food List</h1>

		<a href="{{route('foods.create')}}" class="btn btn-info ">Add New</a>
	</div>
</div>


<div class="container">
	

	<div class="row">

		<div class="col-md-12">

			<table class="table table-bordered">
				<thead class="bg-dark text-white">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Price</th>
						<th>Photo</th>
						<th>CodeNo</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach ($foods as $food)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$food->name}}</td>
						<td>{{$food->price}}</td>
						<td><img src="{{$food->photo}}" width="100" height="100"></td>
						<td>{{$food->codeno}}</td>
						<td>
							<a href="{{route('foods.show',$food->id)}}" class="btn btn-info">Detail</a>
							<a href="{{route('foods.edit',$food->id)}}" class="btn btn-warning">Edit</a>
							
							<form method="post" action="{{route('foods.destroy',$food->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger" value="Delete">
							</form>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection