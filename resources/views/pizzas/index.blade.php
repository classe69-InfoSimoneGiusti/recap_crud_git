@extends('layout.app')

@section('page-title', 'Home')

@section('content')
    <a href="{{route('pizzas.create')}}">Crea una Pizza</a>

    <ul>
        @foreach($pizzas as $pizza)
            <li>
                <span>{{$pizza->name}}</span>
                <a href="{{route('pizzas.show', ['pizza' => $pizza->id])}}">Vedi</a>
            </li>
        @endforeach
    </ul>
@endsection
