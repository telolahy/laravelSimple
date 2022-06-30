@extends('layout')
@section('contenu')
    <div class="card">
        <img class="" style="width: 150px;" src="{{Storage::url($article->image)}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$article->name}}</li>
            <li class="list-group-item">{{$article->description}}</li>
            <li class="list-group-item">{{$article->prix}}</li>
            <li class="list-group-item">{{$article->type}}</li>
        </ul>
    </div>
@endsection