{{-- @extends('base')

@section('link')
  <link rel="icon" type="image/png" href="{{asset('img/small-logo-01.png')}}">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

  <link href='{{asset('css/show.css')}}' rel='stylesheet' type='text/css'>
@endsection

@section('portfolio')

  <section class="work">
    <figure class="white">
        <img src="img/{{$post[0]->image}}" alt="" />
        <dl>
          <dt>{{str_limit($post[0]->titre,$limit = 24, $end= '...')}}</dt>
          <dd>{{str_limit($post[0]->description,$limit = 150, $end= '...')}}</dd>
        </dl>
      </a>
      <div id="wrapper-part-info">
        <div class="part-info-image"><img src="img/" alt="" width="28" height="28"/></div>
        <div id="part-info">{{str_limit($post[0]->titre,$limit = 24, $end= '...')}}</div>
      </div>
    </figure>
  </section>

@endsection --}}

<h1>{{$post[0]->titre}}</h1>
<h2>{{$post[0]->auteur}}</h2>

<figure>
  <img src="../img/{{$post[0]->image}}" alt="">
</figure>

<p>{{$post[0]->description}}</p>

<img src="../img/{{$post[0]->icone}}" alt="">
<h2>{{$post[0]->nom}}</h2>

<h3>Date : {{$post[0]->date}} </h3>
