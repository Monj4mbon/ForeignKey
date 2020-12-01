@extends('main.template')

@section('content')
    <div class="card">
        <h3>Infos Pokémon :</h3>
        <img src="{{$showPokemon->src}}" alt="" class="w-25">
        <p>{{$showPokemon->nom}}</p>
        <p>{{$showPokemon->type}}</p>
        <p>{{$showPokemon->niveau}}</p>
        <form action="/deletePokemon/{{$showPokemon->id}}" method="POST">
            @csrf
            <button class="btn btn-danger">del</button>
        </form>
        <a href="/editPokemon/{{$showPokemon->id}}" class="btn btn-success w-25" method="POST">edit</a>
    </div>
@endsection