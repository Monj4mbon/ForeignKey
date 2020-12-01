@extends('main.template')

@section('content')
    <div class="container">
        <h1>Bienvenue sur le Pokédex de Valentin</h1> 
    </div>
    <form action="/store" method="post">
        @csrf
        <label for="">nom</label>
        <input type="text" name="nom">
    
        <label for="">type</label>
        <input type="text" name="type">
    
        <label for="">src</label>
        <input type="text" name="src">
    
        <label for="">niveau</label>
        <input type="text" name="niveau">
    
        <button type="submit">envoyer</button>
    </form>
    <div>
        @foreach ($pokemon as $item)
            <div class="card bg-dark m-3 text-light w-25">
                <h3>Infos Pokémon {{$item->id}}:</h3>
                <p class="d-flex align-center justify-content-around">{{$item->nom}}, {{$item->type}} <a href="/showBtn/{{$item->id}}" class="btn btn-success">Show</a></p>
            </div>
        @endforeach
    </div>
@endsection