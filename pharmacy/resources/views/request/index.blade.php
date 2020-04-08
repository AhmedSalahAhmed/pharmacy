@extends('request.parent')
@section('main')
@if($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<div class="text-right">
	<a href="{{route('request.create')}}" class="btn btn-success mb-3">Request </a>
</div>
<table id="datatable" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Medicine Id</th>
			<th>Quantaty</th>
			<th>Company</th>
			<th>Medicine Type</th>
			<th>Action</th>

			
		</tr>
	</thead>
	@foreach($data as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->medicineId}}</td>
		<td>{{$row->rqty}}</td>
		<td>{{$row->rcompany}}</td>
		<td>{{$row->mtype}}</td>
		<td><a href="{{route('request.show',$row->id)}} " class="btn btn-primary">Show</a>
			<a href="{{route('request.edit',$row->id)}}" class="btn btn-warning">Edit</a>
			<form action="{{route('request.destroy',$row->id)}}" method="post">
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