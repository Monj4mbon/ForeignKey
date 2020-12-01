@extends('main.template')

@section('content')
    <div class="card">
        <h3>Infos Pokémon :</h3>
        <p>{{$showPokemon->nom}}</p>
        <p>{{$showPokemon->type}}</p>
        <img src="{{$showPokemon->src}}" alt="">
        <p>{{$showPokemon->niveau}}</p>
        <form action="/deletePokemon/{{$showPokemon->id}}" method="POST">
            @csrf
            <button class="btn btn-danger">del</button>
        </form>
        <a href="/editPokemon/{{$showPokemon->id}}" class="btn btn-success" method="POST">edit</a>
    </div>
@endsection