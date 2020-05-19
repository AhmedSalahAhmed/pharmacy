@extends('store.parent')
@section('main')
@if($errors->any())

<div class="alert alert-danger">
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</div>
@endif

	<div class="text-right">
		<a href="{{route('store.index')}}" class="btn btn-primary">Back </a>
	</div>
<form method="post" action="{{route('store.store')}}" enctype="multipart/form-data"  >
	@csrf
	<div class="form-group">
		<input type="text" name="medicineId" placeholder="Medicine Id" class="form-control mt-2">
		<input type="text" name="medicine" placeholder="Medicine " class="form-control mt-2">
		<input type="text" name="mType" placeholder="medicineType" class="form-control mt-2">
		<input type="text" name="company" placeholder="Company" class="form-control mt-2">
		<input type="text" name="qty" placeholder="qty" class="form-control mt-2">
		<input type="text" name="price" placeholder="Price" class="form-control mt-2">
		<input type="text" name="proDate" placeholder="Production Date" class="form-control mt-2">
		<input type="text" name="exDate" placeholder="Expiration Date" class="form-control mt-2">
		<div class="form-group text-center">
		<input type="submit" name="add" value="Add" class="btn btn-success mt-2">
		</div>
	</div>
	
</form>
@endsection