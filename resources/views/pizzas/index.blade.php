@extends('layout.app')

@section('page-title', 'Home')

@section('content')
    <a href="{{route('pizzas.create')}}">Crea una Pizza</a>

    <ul>
        @foreach($pizzas as $pizza)
            <li>
                <span>{{$pizza->name}}</span>
                <a href="{{route('pizzas.show', ['pizza' => $pizza->id])}}">Vedi</a>
                <form action="{{route('pizzas.destroy', ['pizza'=> $pizza->id])}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
