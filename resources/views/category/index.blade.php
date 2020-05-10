@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Title</th>
            <th scope="col">Category Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td><a href="/tasks/{{$row->id}}">{{$row->title}}</a></td>
                <td>{{$row->description}}</td>
                <td>{{$row->created_at->toFormattedDateString()}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ URL::to('category/' . $row->id . '/edit') }}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>&nbsp;
                        <form action="{{url('category', [$row->id])}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
