@extends('layout.app')

@section('page-title', 'Dettagli')

@section('content')
    <ul>
        <li>Nome: {{$pizza->name}}</li>
        <li>Prezzo: {{number_format($pizza->price, 2, ',', '.')}} €</li>
        <li>Dimensione: {{$pizza->size}}</li>
        <li>Url: {{$pizza->url}}</li>
        <li>Descrizione: {{$pizza->description}}</li>
    </ul>
@endsection
