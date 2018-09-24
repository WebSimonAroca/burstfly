@extends('welcome')
@section('content')
<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">

            <div class="title-item">
                <img src="{{asset('img/'.$post->icone)}}" alt="" />
                <div class="title-text">{{ $post->titre }} </div>
                <div class="title-text-2">{{ $post->date }} by {{ $post->auteur }}</div>
            </div>


            <div class="work">
                <figure class="white">
                    <img src="{{asset('img/'.$post->image)}}" alt="" />

                </figure>

                <div class="wrapper-text-description">


                    <div class="wrapper-file">
                        <div class="icon-file"><img src="{{ 'img/'.$post->icone }}" alt="" width="21" height="21"/></div>
                        <div class="text-file">{{ $post->nom  }}</div>
                    </div>

                    <div class="wrapper-weight">
                        <div class="icon-weight"><img src="img/icon-weight.svg" alt="" width="20" height="23"/></div>
                        <div class="text-weight">{{$post->tailleFichier}} Mo</div>
                    </div>

                    <div class="wrapper-desc">
                        <div class="icon-desc"><img src="img/icon-desc.svg" alt="" width="24" height="24"/></div>
                        <div class="text-desc"> {{$post->description}}  </div>
                    </div>

                    <div class="wrapper-download">
                        <div class="icon-download"><img src="img/icon-download.svg" alt="" width="19" height="26"/></div>
                        <div class="text-download"><a href="{{URL::route('download',array('file'=>$post->image))}}"><b>Download</b></a></div>
                    </div>

                    <div class="wrapper-morefrom">
                        <div class="text-morefrom">More from {{'.'.$post->nom  }}</div>
                        <div class="image-morefrom">
                            @include('portefolio.similar',array('categorie'=>$post->categories))
                        </div>
                    </div>

                </div>

                <div class="post-reply">
                    <div id="title-post-send">
                        <hr/><h2>Your comments</h2>
                    </div>


                </div>
                @include('commentaire.index',array('postID'=>$post->id))



                <div class="post-send">
                    <div id="main-post-send">
                        <div id="title-post-send">Add your comment</div>
                        <form id="contact" method="post" action="{{ URL::route('commentaire.create')}}">
                            @csrf
                            <input type="hidden" value="{{$post->id}}" name="postID">
                            <fieldset>
                                <p><textarea id="message" name="message" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
                            </fieldset>
                            <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
        </div>
    </div>

    <div id="main-container-footer">
        <div class="container-footer">

            <div id="row-1f">
                <div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">What is Burstfly</span><br>Burstfly is just a blog showcasing hand-picked free themes, design stuff, free fonts and other resources for web designers.</div>
            </div>

            <div id="row-2f">
                <div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work</span><br>Burstfly offers you all the latest freebies found all over the fourth corners without to pay.</div>
            </div>

            <div id="row-3f">
                <div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Get in touch!</span><br>Subscribe our RSS or follow us on Facebook, Google+, Pinterest or Dribbble to keep updated.</div>
            </div>

            <div id="row-4f">
                <div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Newsletter</span><br>You will be informed monthly about the latest content avalaible.</div>

                <div id="main_tip_newsletter">
                    <form>
                        <input type="text" name="newsletter" id="tip_newsletter_input" list="newsletter" autocomplete=off required>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <div id="wrapper-copyright">
        <div class="copyright">
            <div class="copy-text object">Copyright © 2016. Template by <a style="color:#D0D1D4;" href="http://designscrazed.org/">Dcrazed</a></div>

            <div class="wrapper-navbouton">
                <div class="google object">g</div>
                <div class="facebook object">f</div>
                <div class="linkin object">i</div>
                <div class="dribbble object">d</div>
            </div>
        </div>
    </div>

</div>
    @endsection
