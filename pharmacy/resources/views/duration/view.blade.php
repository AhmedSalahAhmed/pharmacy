@extends('request.parent')
@section('main')
<a href="{{route('request.index')}}">Back </a>

<h1>Id:{{$data->id}}</h1>
<h1>Id:{{$data->pharmacistsId}}</h1>
<h1>Duration Start:{{$data->durStart}}</h1>
<h1>Duration End:{{$data->durEnd}}</h1>
<h1>Duration Income:{{$data->durIncome}}</h1>
@endsection