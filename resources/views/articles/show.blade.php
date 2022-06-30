@extends('layout')
@section('contenu')
    <div class="card">
        <img class="card-img-top" src="{{Storage::url($article->image)}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Item 1</li>
            <li class="list-group-item">Item 2</li>
            <li class="list-group-item">Item 3</li>
        </ul>
    </div>
@endsection