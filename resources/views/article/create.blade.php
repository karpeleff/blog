@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Новая статья</div>

                <div class="panel-body">
                    {!!Form::open()->multipart()->route('articles.store')!!}
                    {!!Form::text('autor', 'Автор')!!}
                    {!!Form::text('title', 'Заголовок')!!}
                    {!!Form::textarea('description', 'Описание')!!}
                    {!!Form::textarea('text', 'Статья')!!}
                    {!!Form::select('category', 'Категория', [1 => 'Gotham City', 2 => 'Springfield'])!!}
                    {!!Form::file('image', 'Фото')!!}
                    {!!Form::submit("Send form")!!}
                    {!!Form::close()!!}

                </div>
            </div>
        </div>
        @endsection








