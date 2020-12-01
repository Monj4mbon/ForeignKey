@extends('main.template')

@section('content')
<div class="container">
    @foreach ($tousType as $item)
        <div class="card bg-primary d-flex align-center font-weight-bold">
            <ul>
                <li><h3>{{$item->nomType}}</h3></li>
                <form action="/deleteType/{{$item->id}}" method="post">
                    @csrf
                    <button class="text-dark btn btn-danger font-weight-bold">Delete</button>
                </form>
                <a href="/editType/{{$item->id}}" class="text-dark btn btn-success font-weight-bold">Edit</a>
            </ul>
        </div>
    @endforeach
    </div>
@endsection