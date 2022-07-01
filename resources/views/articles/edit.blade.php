@extends('layout')
@section('contenu')
{{-- @if (session('status'))
    <div class="alert alert-success mb-12">
        {{ session('status') }}
    </div>
@endif --}}
<form method="POST" action="{{route('article.update',$article->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nom de l'article</label>
        <input type="text" class="form-control" name="name" value={{$article->name}} >
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" value={{$article->description}} >
    </div>
    <div class="form-group">
        <label for="image">Lien image</label>
        <input type="file" class="form-control" name="image" >
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select  class="form-control" name="type">
          <option value="homme">homme</option>
          <option value="femme">femme</option>
          <option value="accessoires">accessoires</option>
        </select>
      </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" name="prix" value={{$article->prix}} >
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection