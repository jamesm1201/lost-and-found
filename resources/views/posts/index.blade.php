@extends('layouts.basic')

@section('title')
    Posts
@endsection

@section('content')
    <p>Lost items in the local area</p>
    <ul>
        @foreach($posts as $post)
            <li> {{$post->name}}</li>
        @endforeach
    </ul>
@endsection