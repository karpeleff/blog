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

                </div>
            </div>
        </div>
@endsection
