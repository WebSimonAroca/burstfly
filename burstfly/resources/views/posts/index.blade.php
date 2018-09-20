@inject('posts', 'App\Http\Controllers\PostController')

  @foreach ($posts->index() as $post)

      <figure class="white">
        <a href="details.html">
          <img src="img/{{$post->image}}" alt="" />
          <dl>
            <dt>{{str_limit($post->titre,$limit = 24, $end= '...')}}</dt>
            <dd>{{str_limit($post->description,$limit = 150, $end= '...')}}</dd>
          </dl>
        </a>
        <div id="wrapper-part-info">
          <div class="part-info-image"><img src="img/{{$post->icone}}" alt="" width="28" height="28"/></div>
          <div id="part-info">{{str_limit($post->titre,$limit = 24, $end= '...')}}</div>
        </div>
      </figure>

  @endforeach
