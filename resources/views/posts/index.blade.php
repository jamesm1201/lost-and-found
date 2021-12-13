@extends('layouts.basic')

@section('title')
    Posts
@endsection

@section('content')
    <p>Lost items in the local area</p>
    <ul>
        @foreach($posts as $post)
            <li> <a href="/posts/{{$post->id}}">{{$post->name}}</a></li>
            <li> {{$post->content}}</li>
        @endforeach
    </ul>
@endsection