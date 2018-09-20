@inject('categories', 'App\Http\Controllers\CategorieController')
<div id="wrapper-navbar">
  <div class="navbar object">
    <div id="wrapper-bouton-icon">
      @foreach ($categories->index() as $categorie)
        <div id="bouton-{{$categorie->format}}"><img src="img/{{$categorie->icone}}" alt="{{$categorie->nom}}" title="{{$categorie->nom}}" height="28" width="28"></div>
      @endforeach
    </div>
  </div>
</div>
