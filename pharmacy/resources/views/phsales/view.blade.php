@extends('phsales.parent')
@section('main')
<a href="{{route('phsales.index')}}">Back </a>

<h1>Id:{{$data->id}}</h1>
<h1>Medicine:{{$data->medicine}}</h1>
<h1>Medicine Type:{{$data->medType}}</h1>
<h1>Quantaty:{{$data->qty}}</h1>
<h1>Price:{{$data->price}}</h1>
<h1>Duration Income:{{$data->durationsId}}</h1>
@endsection