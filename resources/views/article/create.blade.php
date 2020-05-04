{!! Form::open(['url' => 'articles/store','method' => 'post','files' => true]) !!}
autor

{!! Form::text('autor') !!}
title
{!! Form::text('title') !!}
desc
{!! Form::textarea('description') !!}
text
{!! Form::textarea('text') !!}

{!! Form::file('image'); !!}

{!! Form::submit('Click Me!') !!}
{!! Form::close() !!}