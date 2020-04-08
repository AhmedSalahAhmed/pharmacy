
<!--
@section('main')
	<a href="{{route('duration.index')}}">Back </a>

<form method="post" action="{{route('duration.update', $data->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<label>Duration Start</label>
	<input type="text" name="rqty" value="{{$data->durStart}}">
	<label>Duration End</label>
	<input type="text" name="rcompany" value="{{$data->durEnd}}">
	<label>Duration Income</label>
	<input type="text" name="mType" value="{{$data->durIncome}}">
	<input type="submit" name="edit" value="Update">
	
</form>
@endsection
!-->
@extends('duration.parent')
@section('main')
	<a href="{{route('duration.index')}}">Back </a>

<form method="post" action="{{route('duration.update', $data->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<label>Pharmacist Id</label>
	<input type="text" name="durStart" value="{{$data->pharmacistId}}">
	<label>Duration Start</label>
	<input type="text" name="durStart" value="{{$data->durStart}}">
	<label>Duration End</label>
	<input type="text" name="durEnd" value="{{$data->durEnd}}">
	<label>Duration Income</label>
	<input type="text" name="durIncome" value="{{$data->durIncome}}">
	<input type="submit" name="edit" value="Update">
	
</form>
@endsection