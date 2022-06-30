@extends('layout')
@section('contenu')
    <div class="card">
        <img class="" style="width: 150px;" src="{{Storage::url($article->image)}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">{{$article->name}}</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$article->description}}</li>
            <li class="list-group-item">{{$article->prix}}</li>
            <li class="list-group-item">{{$article->type}}</li>
            <div class="d-flex ">
                <a class="btn btn-primary btn-sm mx-10" href="{{route('article.edit',$article->id)}}" >MODIFIER ARTICLE</a>
                <form action="{{route('article.destroy',$article->id)}}" method="POST">
                    @method('DELETE')
                    @csrf  
                    <button class="btn btn-danger btn-sm mx-10" type="submit" >SUPPRIMER ARTICLE</button>
                </form>
            </div>
        </ul>
    </div>
@endsection