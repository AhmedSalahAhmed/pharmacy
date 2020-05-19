@extends('phsales.parent')
@section('main')
	<a href="{{route('phsales.index')}}">Back </a>

<form method="post" action="{{route('phsales.update', $data->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<label>Id</label>
	<input type="text" name="id" value="{{$data->id}}">
	<label>Medicine</label>
	<input type="text" name="medicine" value="{{$data->medicine}}">
	<label>Medicine Type</label>
	<input type="text" name="medType" value="{{$data->medType}}">
	<label>Quantaty</label>
	<input type="text" name="qty" value="{{$data->qty}}">
	<label>Price</label>
	<input type="text" name="price" value="{{$data->price}}">
	<label>Durations Id</label>
	<input type="text" name="durationsId" value="{{$data->durationsId}}">
	<input type="submit" name="edit" value="Update">
	
</form>
@endsection