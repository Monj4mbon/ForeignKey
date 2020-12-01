@extends('main.template')

@section('content')
    <form action="/typeStore" method="post">
        @csrf
        <label for="">nom du type</label>
        <input type="text" name="nomType">
        <button type="submit">envoyer</button>
    </form>
@endsection