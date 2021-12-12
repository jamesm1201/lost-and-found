@extends('layouts.basic')

@section('title')
    Post Details
@endsection

@section('content')
    <p>Lost items in the local area</p>
    <ul>
        <li>Name: {{$post->name}}</li>
        <li>Email: {{$post->email}}</li>
        <li>Contact number: {{$post->contact_number ?? 'N/A'}}</li>
        <li>Date: {{$post->date_found_lost ?? 'N/A'}}</li>
        <li> {{$post->content}}</li>
        <li>Item: {{$post->item->name}}</li>
    </ul>
@endsection