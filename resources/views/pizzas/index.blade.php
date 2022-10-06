@extends('layout.app')

@section('page-title', 'Home')

@section('content')
    <ul>
        @foreach($pizzas as $pizza)
            <li>{{$pizza->name}}</li>
        @endforeach
    </ul>
@endsection
