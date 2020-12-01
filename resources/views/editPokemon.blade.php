@extends('main.template')

@section('content')
    <form action="/editPokemon/{{$editPokemon->id}}" method="post">
        @csrf
        <label for="">nom</label>
        <input type="text" placeholder="{{$editPokemon->nom}}" name="nom">

        <label for="">type</label>
        <select name="type">
            <option value="">{{$editPokemon->type}}</option>
            <option value="Normal">Normal</option>
            <option value="Combat">Combat</option>
            <option value="Vol">Vol</option>
            <option value="Poison">Poison</option>
            <option value="Sol">Sol</option>
            <option value="Roche">Roche</option>
            <option value="Insecte">Insecte</option>
            <option value="Spectre">Spectre</option>
            <option value="Acier">Acier</option>
            <option value="Feu">Feu</option>
            <option value="Eau">Eau</option>
            <option value="Plante">Plante</option>
            <option value="Electrik">Electrik</option>
            <option value="Psy">Psy</option>
            <option value="Glace">Glace</option>
            <option value="Dragon">Dragon</option>
            <option value="Ténèbres">Ténèbres</option>
            <option value="Fée">Fée</option>
        </select>

        <label for="">src</label>
        <input type="text" name="src">

        <label for="">niveau</label>
        <input type="text" placeholder="{{$editPokemon->niveau}}" name="niveau">

        <button type="submit">Update</button>
    </form>
@endsection