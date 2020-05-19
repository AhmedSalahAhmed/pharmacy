@extends('pharmacy.parent')
@section('main')
<div class="text-right">
	<a href="{{route('pharmacy.index')}}" class="btn btn-primary">Back </a>
</div>
<form method="post" action="{{route('pharmacy.update', $data->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<label>Sales Id</label>
	<input type="text" name="pharmaciesId" value="{{$data->pharmaciesId}}" class="form-control">
	<label>Pharmacy Id</label>
	<input type="text" name="phName" value="{{$data->phName}}" class="form-control">
	<label>Medicine Id</label>
	<input type="text" name="address" value="{{$data->address}}" class="form-control">
	<label>Quantaty</label>
	<input type="text" name="phAdmin" value="{{$data->phAdmin}}" class="form-control">
	<label>Quantaty</label>
	<input type="text" name="email" value="{{$data->email}}" class="form-control">
	<label>Quantaty</label>
	<input type="text" name="password" value="{{$data->password}}" class="form-control">
	<label>Quantaty</label>
	<input type="text" name="phone" value="{{$data->phone}}" class="form-control">
	<div class="text-center">
	<input type="submit" name="edit" value="Update" class="btn btn-warning mt-2">
	</div>
</form>
@endsection