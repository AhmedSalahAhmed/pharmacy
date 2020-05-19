@extends('request.parent')
@section('main')
	<a href="{{route('phsales.index')}}">Back </a>

<form method="post" action="{{route('phsales.store')}}" enctype="multipart/form-data">
	@csrf

	<label>Id</label>
	<input type="text" name="id">
	<label>Medicine</label>
	<input type="text" name="medicine">
	<label>Medicine Type</label>
	<input type="text" name="medType">
	<label>Quantaty</label>
	<input type="text" name="qty">
	<label>Price</label>
	<input type="text" name="price">
	<label>Duration Id</label>
	<input type="text" name="durationsId">
	<input type="submit" name="add" value="Add">
	
</form>
@endsection