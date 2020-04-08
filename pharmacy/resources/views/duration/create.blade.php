@extends('request.parent')
@section('main')
	<a href="{{route('duration.index')}}">Back </a>

<form method="post" action="{{route('duration.store')}}" enctype="multipart/form-data">
	@csrf

	<label>Pharmacists Id</label>
	<input type="text" name="pharmacistsId">
	<label>Duration Start</label>
	<input type="text" name="durStart">
	<label>Duration End</label>
	<input type="text" name="durEnd">
	<label>Duration Income</label>
	<input type="text" name="durIncome">
	<input type="submit" name="add" value="Add">
	
</form>
@endsection