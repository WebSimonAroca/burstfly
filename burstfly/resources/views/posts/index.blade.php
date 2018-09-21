{{-- @inject('posts', 'App\Http\Controllers\PostController') --}}
@extends('base')

@section('link')
  <link rel="icon" type="image/png" href="{{asset('img/small-logo-01.png')}}">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='{{asset('css/style.css')}}' rel='stylesheet' type='text/css'>
@endsection

@section('navbar')
  @include('categories.index')
@endsection

@section('portfolio')
  @foreach ($posts as $post)

    <section class="work">
      <figure class="white">
        <a href="{{ route('posts.show', [$post->id]) }}">
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

@section('js')
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
  <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
  <script type="text/javascript" src="js/fastclick.min.js"></script>
  <script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
  <script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.flip.min.js"></script>
@endsection

@section('script')


    /* PRELOADER */

    function preloader() {
      if (document.images) {
        var img1 = new Image();
        var img2 = new Image();
        var img3 = new Image();
        var img4 = new Image();
        var img5 = new Image();
        var img6 = new Image();
        var img7 = new Image();
        var img8 = new Image();
        var img9 = new Image();
        var img10 = new Image();
        var img11 = new Image();
        var img12 = new Image();
        var img13 = new Image();
        var img14 = new Image();
        var img15 = new Image();
        var img16 = new Image();
        var img17 = new Image();
        var img18 = new Image();
        var img19 = new Image();
        var img20 = new Image();

        img1.src = "img/psd-4.jpg";
        img2.src = "img/font-1.jpg";
        img3.src = "img/psd-1.jpg";
        img4.src = "img/psd-2.jpg";
        img5.src = "img/ai-1.jpg";
        img6.src = "img/theme-2.jpg";
        img7.src = "img/psd-3.jpg";
        img8.src = "img/font-2.jpg";
        img9.src = "img/font-3.jpg";
        img10.src = "img/ai-2.jpg";
        img11.src = "img/icons-1.jpg";
        img12.src = "img/ui-1.jpg";
        img13.src = "img/font-5.jpg";
        img14.src = "img/theme-2.jpg";
        img15.src = "img/psd-5.jpg";
        img16.src = "img/icons-3.jpg";
        img17.src = "img/font-4.jpg";
        img18.src = "img/theme-3.jpg";
        img19.src = "img/font-6.jpg";
        img20.src = "img/theme-4.jpg";
      }
    }
    function addLoadEvent(func) {
      var oldonload = window.onload;
      if (typeof window.onload != 'function') {
        window.onload = func;
      } else {
        window.onload = function() {
          if (oldonload) {
            oldonload();
          }
          func();
        }
      }
    }
    addLoadEvent(preloader);

@endsection
