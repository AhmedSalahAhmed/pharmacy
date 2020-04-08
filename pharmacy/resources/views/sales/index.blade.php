@extends('sales.parent')
@section('main')
@if($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<div class="text-right">
	<a href="{{route('sales.create')}}" class="btn btn-success mb-3">Add </a>
</div>
<table id="datatable" class="table table-bordered table-striped">
	<thead>
		<tr>
		<th scope="col">Sales Id</th>
		<th scope="col">Pharmacy</th>
		<th scope="col">Medicine Id</th>
		<th scope="col">Quantaty</th>
		<th scope="col">Action</th>
	</tr>
	</thead>
	<tfoot>
		<tr>
		<th scope="col">Sales Id</th>
		<th scope="col">Pharmacy</th>
		<th scope="col">Medicine Id</th>
		<th scope="col">Quantaty</th>
		<th scope="col">Action</th>
	</tr>
	</tfoot>
	@foreach($data as $row)
	<tr>
		<td>{{$row->salesId}}</td>
		<td>{{$row->pharmaciesId}}</td>
		<td>{{$row->medicineId}}</td>
		<td>{{$row->qty}}</td>
		<td><a href="{{route('sales.show',$row->id)}} " class="btn btn-primary">Show</a>
			<a href="{{route('sales.edit',$row->id)}}" class="btn btn-warning">Edit</a>
			<form action="{{route('sales.destroy',$row->id)}}" method="post">
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