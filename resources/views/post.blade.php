@extends('layouts.basic')

@section('title')
    {{$comment}} Post
@endsection

@section('content')

    @if($comment)
        <p>Here is the comment {{$comment}}</p>
    @else
        <h1>No comment</h1>
    @endif

@endsection