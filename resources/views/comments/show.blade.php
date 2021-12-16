@extends('layouts.basic')

@section('title')
    Comment
@endsection

@section('content')
    <p>Comment of this post</p>
    <ul>
        <li>Name: {{$comment->name}}</li>
        <li>Email: {{$comment->email}}</li>
        <li>Contact number: {{$comment->contact_number ?? 'N/A'}}</li>
        <li>Message: {{$comment->content}}</li>
        
        <a href="{{route('comments.create')}}">Create Comment</a>
    </ul>
@endsection