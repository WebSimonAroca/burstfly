
@inject('commentaires','App\Http\Controllers\CommentairesController')


@foreach($commentaires->show($postID) as $commentaire)
    <div class="post-reply">
        <div class="image-reply-post"></div>
        <div class="name-reply-post">{{$commentaire->nom}}</div>
        <div class="text-reply-post">{{$commentaire->contenu}}</div>
    </div>
@endforeach


