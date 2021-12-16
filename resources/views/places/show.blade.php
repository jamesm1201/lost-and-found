@extends('layouts.basic')

@section('title')
    Post Details
@endsection

@section('content')
    <p>Lost items in the local area</p>
    <ul>
        <li>Rough Area: {{$place->rough_area}}</li>
        <li>Specific Area: {{$place->specific_area ?? ''}}</li>
        <li><a href="{{route('posts.show', ['id'=>$place->id])}}"></a></li>
        
    </ul>

    
@endsection