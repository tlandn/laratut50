@extends('app')

@section('content')
    Xin chao ban {{ $firstname }} {{ $lastname }}
    @if ($firstname == 'John')
        <h1>Hello John</h1>
    @else
        <h1>Hello {{$firstname}}</h1>
    @endif

@stop