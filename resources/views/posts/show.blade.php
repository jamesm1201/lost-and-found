@extends('layouts.basic')

@section('title')
    Post Details
@endsection

@section('content')
    <p>Lost items in the local area</p>
    <ul>
        <li>Name: {{$post->name}}</li>
        <li>Email: {{$post->email}}</li>
        <li>Contact number: {{$post->contact_number}}</li>
        <li>Date: {{$post->date_found_lost}}</li>
        <li> {{$post->content}}</li>
    </ul>
@endsection