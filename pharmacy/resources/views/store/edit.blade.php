@extends('store.parent')
@section('main')
<div class="text-right">
	<a href="{{route('store.index')}}" class="btn btn-primary">Back </a>
</div>
<form method="post" action="{{route('store.update', $data->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<label>Medicine Id</label>
	<input type="text" name="medicineId" value="{{$data->medicineId}}" class="form-control">
	<label>Medicine </label>
	<input type="text" name="medicine" value="{{$data->medicine}}" class="form-control">
	<label>Medicine Type</label>
	<input type="text" name="mType" value="{{$data->mType}}" class="form-control">
	<label>Company</label>
	<input type="text" name="company" value="{{$data->company}}" class="form-control">
	<label>Quantaty</label>
	<input type="text" name="qty" value="{{$data->qty}}" class="form-control">
	<label>Price</label>
	<input type="text" name="price" value="{{$data->price}}" class="form-control">
	<label>Production Date</label>
	<input type="text" name="proDate" value="{{$data->proDate}}" class="form-control">
	<label>Expiration Date</label>
	<input type="text" name="exDate" value="{{$data->exDate}}" class="form-control">
	<div class="text-center">
	<input type="submit" name="edit" value="Update" class="btn btn-warning mt-2">
	</div>
</form>
@endsection