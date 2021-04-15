
@extends('base')

@section('content')
    <!-- Insertion image -->
    <img src="{{asset('/images/images.jfif')}}" alt="Quebec Flag">
    <h1>Hello from Quebec ! </h1>
    <p> It's curently {{ date('h:i A') }} </p>

@endsection
