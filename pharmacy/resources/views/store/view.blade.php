@extends('store.parent')
@section('main')
<a href="{{route('store.index')}}">Back </a>

<h1>Medicine Id:{{$data->MedicineId}}</h1>
<h1>Medicine:{{$data->medicine}}</h1>
<h1>Medicine Type:{{$data->mType}}</h1>
<h1>Company:{{$data->company}}</h1>
<h1>Quantaty:{{$data->qty}}</h1>
<h1>Price:{{$data->price}}</h1>
<h1>Production Date{{$data->proDate}}</h1>
<h1>Expiration Date{{$data->exDate}}</h1>
@endsection