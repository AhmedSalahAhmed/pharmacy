@extends('request.parent')
@section('main')
@if($errors->any())

<div class="alert alert-danger">
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</div>
@endif

	<div class="text-right">
		<a href="{{route('request.index')}}" class="btn btn-primary">Back </a>
	</div>
<form method="post" action="{{route('request.store')}}" enctype="multipart/form-data"  >
	@csrf
	<div class="form-group">
		<input type="text" name="medicineId" placeholder="Medicine Id" class="form-control mt-2">
		<input type="text" name="rqty" placeholder="Quantaty" class="form-control mt-2">
		<input type="text" name="rcompany" placeholder="Company" class="form-control mt-2">
		<input type="text" name="mtype" placeholder="Medicine Type" class="form-control mt-2">
		<div class="form-group text-center">
		<input type="submit" name="add" value="Request" class="btn btn-success mt-2">
		</div>
	</div>
	
</form>
@endsection