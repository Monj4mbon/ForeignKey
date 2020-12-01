@extends('main.template')

@section('content')
    <form action="/editType/{{$editType->id}}" method="post">
        @csrf
        <label for="">nom du type</label>
        <input type="text" placeholder="{{$editType->nomType}}" name="nomType">
        <button type="submit">update</button>
    </form>
@endsection