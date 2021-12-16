@extends('layouts.basic')

@section('title', 'Create Comment')

@section('content')
    <form method="POST" action="{{route('comments.store')}}">
        @csrf
        <p>Name: <input type="text" name="name"
            value={{old('name') }}></p>
        <p>Email: <input type="text" name="email"
        value={{old('email') }}></p>
        <p>Contact Number: <input type="text" name="contact_number"
        value={{old('contact_number') }}></p>
        <p>Message: <input type="text" name="content"
        value={{old('content') }}></p>
        <p>Post id: <input type="number" name="post_id"
        value={{old('post_id') }}></p>
        
        
        <input type="submit" value="Submit">
        <a href="{{route('comments.index')}}">Cancel</a>
@endsection