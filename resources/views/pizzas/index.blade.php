@extends('layout.app')

@section('page-title', 'Home')

@section('content')
    <a href="{{route('pizzas.create')}}">Crea una Pizza</a>

    <ul>
        @foreach($pizzas as $pizza)
            <li>{{$pizza->name}}</li>
        @endforeach
    </ul>
@endsection
