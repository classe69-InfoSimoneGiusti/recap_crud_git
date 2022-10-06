@extends('layout.app')

@section('page-title', 'Crea pizza')

@section('content')

    <div>
        <form action="{{route('pizzas.store')}}" method="POST">
            @csrf
            <div>
                <label for="name">Inserisci nome</label>
                <input type="text" id="name" name="name" value="{{old('name')}}"/>
            </div>

            <div>
                <label for="price">Inserisci prezzo </label>
                <input type="number" min="0" max="99.99" step="0.01" id="price" name="price" value="{{old('price')}}" />
            </div>

            <div>
                <label for="size">Seleziona una dimensione</label>
                <select name="size" id="size">
                    <option value="normale" {{(old('size') == 'normale')?'selected':''}}>normale</option>
                    <option value="familiare" {{(old('size') == 'familiare')?'selected':''}}>familiare</option>
                    <option value="baby" {{(old('size') == 'baby')?'selected':''}}>baby</option>
                </select>
            </div>

            <div>
                <label for="url">Inserisci url</label>
                <input type="text" id="url" name="url" value="{{old('url')}}" />
            </div>
            <div>
                <label for="description">Inserisci descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            </div>
            <button type="submit">Invia</button>
        </form>
    </div>
@endsection
