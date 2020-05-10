
@foreach($comments as $comment)


<form action="{{url('comment', [$comment->id])}}" method="POST">
    {{$comment->email}}
    <br>
    {{$comment->comment}}
    <br>

    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="btn btn-danger" value="Delete"/>
</form>

<div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{ URL::to('comment/' . $comment->id . '/update') }}">
        <button type="button" class="btn btn-warning">published</button>
    </a>




@endforeach