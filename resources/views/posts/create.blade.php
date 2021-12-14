@extends('layouts.basic')

@section('title', 'Create Post')

@section('content')
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Contact Number: <input type="text" name="contact_number"></p>
        <p>Date Found: <input type="text" name="date_found_lost"></p>
        <p>Content: <input type="text" name="content"></p>
        <p>Place id: <input type="text" name="place_id"></p>
        <input type="submit" value="Submit">
        <a href="{{route('posts.index')}}">Cancel</a>
@endsection