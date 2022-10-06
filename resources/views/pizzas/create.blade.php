@extends('layout.app')

@section('page-title', 'Crea pizza')

@section('content')

    <div>
        <form action="{{route('pizzas.store')}}" method="POST">
            @csrf
            <div>
                <label for="name">Inserisci nome</label>
                <input type="text" id="name" name="name" />
            </div>

            <div>
                <label for="price">Inserisci prezzo </label>
                <input type="text" id="price" name="price" />
            </div>

            <div>
                <label for="size">Seleziona una dimensione</label>
                <select name="size" id="size">
                    <option value="normale">normale</option>
                    <option value="familiare">familiare</option>
                    <option value="baby">baby</option>
                </select>
            </div>

            <div>
                <label for="url">Inserisci url</label>
                <input type="text" id="url" name="url" />
            </div>
            <div>
                <label for="description">Inserisci descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Invia</button>
        </form>
    </div>
@endsection
