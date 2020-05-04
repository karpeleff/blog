@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">список статей</div>

                <div class="panel-body">

                    @foreach($data as $row)
                    <div class="card">
                        <h5 class="card-header">Автор:{{$row->autor}}</h5>
                        <h5 class="card-header">Опубликовано:{{$row->created_at}}</h5>
                        <h5 class="card-header">Категория:{{$row->category}}</h5>
                        <div class="card-body">
                            <h5 class="card-title">Статья :{{$row->title}}</h5>
                            <button type="button" class="btn btn-success">Like</button>
                            <button type="button" class="btn btn-danger">Dis</button>
                            <p class="card-text">{{$row->description}}</p>
                            <a href="articles/{{$row->id}}" class="btn btn-primary">Читать статью</a>
                        </div>
                    </div>
@endforeach

                    {{ $data->links() }}
                </div>
            </div>
        </div>




@endsection

