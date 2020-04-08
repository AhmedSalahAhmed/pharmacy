@extends('request.parent')
@section('main')
<a href="{{route('sales.index')}}">Back </a>

<h1>Sales Id:{{$data->id}}</h1>
<h1>Pharmacy Id:{{$data->pharmaciesId}}</h1>
<h1>Medicine Id:{{$data->medicineId}}</h1>
<h1>Quantaty:{{$data->qty}}</h1>
@endsection