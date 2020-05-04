@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">список статей</div>

                <div class="panel-body">
                    <div class="card">
                        <h5 class="card-header">Автор: Пушкин</h5>
                        <h5 class="card-header">Опубликовано: 345734737</h5>
                        <h5 class="card-header">Категория: Это интересно</h5>
                        <div class="card-body">
                            <h5 class="card-title">Статья :  Я хозяин парка</h5>
                            <button type="button" class="btn btn-success">Like</button>
                            <button type="button" class="btn btn-danger">Dis</button>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Читать статью</a>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>




@endsection

