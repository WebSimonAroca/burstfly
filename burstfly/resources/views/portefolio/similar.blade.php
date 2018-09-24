@inject('posts','App\Http\Controllers\Categories\CategoriesController)


@foreach($posts->similar($categorie) as $post)
    <a href="{{URL::route('portfolio.show',array('slug'=>$post->slug))}}">
      <div class="image-morefrom-1">
        <img src="{{ asset('img/'.$post->image) }}" alt="" width="430" height="330"/>
      </div>
    </a>
@endforeach
