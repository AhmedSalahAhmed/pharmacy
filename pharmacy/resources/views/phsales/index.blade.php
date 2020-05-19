@extends('phsales.parent')
@section('main')
<div>
	<a href="{{route('phsales.create')}}">Add </a>
</div>
    <table border="2" id="datatable" class="table text-center table-bordered table-striped">
        <thead>
			<tr>
				<th>Id</th>
				<th>Medicine</th>
				<th>Medicine Type</th>
				<th>Quantaty</th>
				<th>Price</th>
				<th>Total</th>
				<th>Duration id</th>
				<th>Action</th>
				
			</tr>
		</thead>
	@foreach($data as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->medicine}}</td>
		<td>{{$row->medType}}</td>
		<td>{{$row->qty}}</td>
		<td>{{$row->price}}</td>
		<td>{{$row->price*$row->qty}}</td>
		<td>{{$row->durationsId}}</td>
		<td><a href="{{route('phsales.show',$row->id)}}">Show</a>
			<a href="{{route('phsales.edit',$row->id)}}">Edit</a>
			<form action="{{route('phsales.destroy',$row->id)}}" method="post">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>

			</form>
		</td>
	</tr>
	@endforeach
</table>
{!!$data->links()!!}
@endsection