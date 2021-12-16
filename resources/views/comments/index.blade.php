@extends('layouts.basic')

@section('title')
    Comments
@endsection

@section('content')
    <p>Comments</p>
    <ul>
        
        @foreach($comments as $comment) 
        <li> {{$comment->name}}</li>
        <li> {{$comment->contact_number}}</li>
        <li> {{$comment->email}}</li>
        <li> {{$comment->content}}</li>    
        <li> Post Number: {{$comment->post_id}}</li> 
        <li> <a href="{{route('posts.show', ['id'=>$comment->post_id])}}">Go to corresponding post: {{$comment->post_id}}</a></li>  
        @endforeach
        
    </ul>
    <a href="{{route('comments.create')}}">Create Comment</a>
@endsection