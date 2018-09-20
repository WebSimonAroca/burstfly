{{-- @inject('posts', 'App\Http\Controllers\PostController') --}}
@extends('base')

@section('link')
  <link rel="icon" type="image/png" href="{{asset('img/small-logo-01.png')}}">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='{{asset('css/style.css')}}' rel='stylesheet' type='text/css'>
@endsection

@section('portfolio')
  @foreach ($posts as $post)

    <section class="work">
      <figure class="white">
        <a href="">
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
    </section>

  @endforeach
@endsection
