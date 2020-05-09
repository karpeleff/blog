


@foreach($comments as $comment)
    {{$comment->email}}
    <br>
    {{$comment->comment}}
    <br>


@endforeach