@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-7 mx-auto">
        <h1>{{$post->title}}</h1>
        <img src="{{url('uploads/post/' .$post->image)}}" class="card-img-top" alt="{{$post->title}}">

        <p>{{$post->Description}}</p>
    </div>
</div>

@endsection
