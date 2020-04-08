@extends('sales.parent')
@section('main')
@if($errors->any())

<div class="alert alert-danger">
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</div>
@endif

	<div class="text-right">
		<a href="{{route('sales.index')}}" class="btn btn-primary">Back </a>
	</div>
<form method="post" action="{{route('sales.store')}}" enctype="multipart/form-data"  >
	@csrf
	<div class="form-group">
		<input type="text" name="salesId" placeholder="Sales Id" class="form-control mt-2">
		<input type="text" name="pharmaciesId" placeholder="Pharmacy Id" class="form-control mt-2">
		<input type="text" name="medicineId" placeholder="Medicine Id" class="form-control mt-2">
		<input type="text" name="qty" placeholder="Quantaty" class="form-control mt-2">
		<div class="form-group text-center">
		<input type="submit" name="add" value="Add" class="btn btn-success mt-2">
		</div>
	</div>
	
</form>
@endsection