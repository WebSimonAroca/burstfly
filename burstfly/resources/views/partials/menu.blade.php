
<div id="wrapper-navbar">
    <div class="navbar object">
        <div id="wrapper-bouton-icon">


            @foreach($categories as $categorie)
                <a class="categories" href="{{ URL::route('categorie.show',array('slug'=>$categorie->slug)) }}">
                <div id="{{ "bouton-$categorie->format" }}">
                    <img src="{{ asset('img/'.$categorie->icone) }}" alt="illustrator" title="Illustrator" height="28" width="28">
                </div>
                </a>
            @endforeach

        </div>
    </div>
</div>