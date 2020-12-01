@extends('main.template')

@section('content')
    <form action="/editPokemon/{{$editPokemon->id}}" method="post">
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
@endsection