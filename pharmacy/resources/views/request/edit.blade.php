@extends('request.parent')
@section('main')
<div class="text-right">
	<a href="{{route('request.index')}}" class="btn btn-primary">Back </a>
</div>
<form method="post" action="{{route('request.update', $data->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<label>Medicine Id</label>
	<input type="text" name="medicineId" value="{{$data->medicineId}}" class="form-control">
	<label>Quantaty</label>
	<input type="text" name="rqty" value="{{$data->rqty}}" class="form-control">
	<label>Company</label>
	<input type="text" name="rcompany" value="{{$data->rcompany}}" class="form-control">
	<label>Medicine Type</label>
	<input type="text" name="mtype" value="{{$data->mtype}}" class="form-control">
	<div class="text-center">
	<input type="submit" name="edit" value="Update" class="btn btn-warning mt-2">
	</div>
</form>
@endsection