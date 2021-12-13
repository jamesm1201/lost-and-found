@extends('layouts.basic')

@section('title')
    Posts
@endsection

@section('content')
    <p>Lost items in the local area</p>
    <ul>
        @foreach($posts as $post)
            <li> <a href="{{route('posts.show', ['id'=>$post->id])}}">{{$post->name}}</a></li>
            <li> {{$post->content}}</li>
        @endforeach
    </ul>
    <a href="{{route('posts.create')}}">Create Post</a>
@endsection