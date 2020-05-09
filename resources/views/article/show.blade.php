@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Автор: {{$data->autor}}</div>

                <div class="panel-body">
                    <div class="card">
                        <h5 class="card-header">{{$data->title}}</h5>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <img class="img-fluid" src = {{asset('/storage/'.$data->image)}} >
                            <p class="card-text">{{$data->text}}</p>
                            <p class="card-text">Просмотров: {{$data->viewed}}</p>
                        </div>
                    </div>

                    <!-- LikeBtn.com BEGIN -->
                    <span class="likebtn-wrapper" data-theme="review" data-lang="ru" data-ef_voting="grow" data-white_label="true" data-identifier="item_1" data-share_enabled="false" data-i18n_dislike="Не нравится"></span>
                    <script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
                    <!-- LikeBtn.com END -->




                </div>
            </div>



                <div class="panel panel-default">
                    <div class="panel-heading">Добавить комментарий</div>

                    <div class="panel-body">
                        {!!Form::open()->route('comment.store')!!}
                        {!!Form::text('email', 'Электропочта')->required()!!}
                        {!!Form::textarea('comment', 'Текст комментария')->required()!!}
                        {!!Form::hidden('article_id',$data->id)!!}
                        {!!Form::hidden('published',0)!!}
                        {!!Form::submit("Send form")!!}
                        {!!Form::close()!!}

                    </div>
                </div>

        </div>

@endsection

