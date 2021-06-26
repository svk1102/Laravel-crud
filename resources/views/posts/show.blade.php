@extends('layout.app')

@section('content')
<a href="/posts" class="mt-2 btn btn-dark">Back</a>
<h1 class="mt-3">{{ $post ->title }}</h1>

<div class="mt-3">
   {{ $post->body }}


</div>
<hr>
<small>Written on {{ $post ->created_at }}</small>
 <hr>
 <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit Post</a>


 {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST', 'class'=> 'float-right' ])!!}
    {{ Form::hidden('_method','DELETE') }}
    {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
 {!! Form::close() !!}

@endsection