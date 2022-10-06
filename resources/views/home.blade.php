@extends('layout.app')

@section('page-title', 'home')

@section('content')
    <h1>Benvenuti all gestione della pizzeria</h1>
    <a href="{{route('pizzas.index')}}">Vedi le Pizze</a>
@endsection
