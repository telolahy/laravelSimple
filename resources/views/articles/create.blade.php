@extends('layout')
@section('contenu')
@if (session('status'))
    <div class="alert alert-success mb-12">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nom de l'article</label>
        <input type="text" class="form-control" name="name" >
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" >
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
        <input type="text" class="form-control" name="prix" >
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection