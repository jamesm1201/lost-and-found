@extends('layouts.basic')

@section('title')
    Places of Found Items
@endsection

@section('content')
    <p>Check for posts in a certain place!</p>
    <ul>
        @foreach($places as $place)
            <li> <a href="{{route('places.show', ['id'=>$place->id])}}">{{$place->rough_area}}</a></li>
            <li> {{$place->specific_area ?? ''}}</li>
        @endforeach
    </ul>
@endsection