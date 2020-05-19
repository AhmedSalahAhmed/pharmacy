@extends('sales.parent')
@section('main')
<div class="text-right">
	<a href="{{route('sales.index')}}" class="btn btn-primary">Back </a>
</div>
<form method="post" action="{{route('sales.update', $data->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<label>Sales Id</label>
	<input type="text" name="salesId" value="{{$data->salesId}}" class="form-control">
	<label>Pharmacy Id</label>
	<input type="text" name="pharmaciesId" value="{{$data->pharmaciesId}}" class="form-control">
	<label>Medicine Id</label>
	<input type="text" name="medicineId" value="{{$data->medicineId}}" class="form-control">
	<label>Quantaty</label>
	<input type="text" name="qty" value="{{$data->qty}}" class="form-control">
	<div class="text-center">
	<input type="submit" name="edit" value="Update" class="btn btn-warning mt-2">
	</div>
</form>
@endsection