@extends('pharmacist.parent')
@section('main')
<a href="{{route('pharmacist.create')}}">Insert Pharmacist</a>
<table id="datatable" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Pharmacist Name</th>
			<th>Phone Number</th>
			<th>Duration</th>
			<th>User Name</th>
			<th>Password</th>
			<th>Acion</th>
		</tr>
	</thead>
	@foreach($data as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->pharmacistName}}</td>
		<td>{{$row->phoneNum}}</td>
		<td>{{$row->duration}}</td>
		<td>{{$row->userName}}</td>
		<td>{{$row->password}}</td>
		<td>
			<a href="{{route('pharmacist.show',$row->id)}}">Show</a>
			<a href="{{route('pharmacist.edit',$row->id)}}">Update</a>
			<form method="post" action="{{route('pharmacist.destroy',$row->id)}}">
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