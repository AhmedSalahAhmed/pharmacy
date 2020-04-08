@extends('pharmacy.parent')
@section('main')
@if($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<div class="text-right">
	<a href="{{route('pharmacy.create')}}" class="btn btn-success mb-3">Add New Pharmacy</a>
</div>
<div>
	<form action="/search" method="get">
		<div class="input-group">
			<input type="search" name="search" class="form-control" placeholder="Enter Anything In Your Mind...">
			<span class="input-group-prepend">
				<button type="submit" class="btn btn-primary">Search</button>
				
			</span>
			
		</div>
		
	</form>
</div>
<table id="datatable" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Pharmacy Id</th>
			<th>Pharmacy Name</th>
			<th>Lacation</th>
			<th>Pharmacy Admin</th>
			<th>Email</th>
			<th>Password</th>
			<th>Phone Number</th>
			<th>Action</th>
		</tr>
	</thead>
	
	@foreach($data as $row)
	<tr>
		<td>{{$row->pharmaciesId}}</td>
		<td>{{$row->phName}}</td>
		<td>{{$row->address}}</td>
		<td>{{$row->phAdmin}}</td>
		<td>{{$row->email}}</td>
		<td>{{$row->password}}</td>
		<td>{{$row->phone}}</td>
		<td><a href="{{route('pharmacy.show',$row->id)}} " class="btn btn-primary">Show</a>
			<a href="{{route('pharmacy.edit',$row->id)}}" class="btn btn-warning">Edit</a>
			<form action="{{route('pharmacy.destroy',$row->id)}}" method="post">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
{!!$data->links()!!}
@endsection