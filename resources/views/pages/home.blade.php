
@extends('base')

@section('content')
    <!-- Insertion image -->
    <img src="{{asset('/images/images.jfif')}}" alt="Quebec Flag">
    <h1 class="text-5xl font-semibold text-indigo-600">Hello from Quebec ! </h1>


    <!-- fonction date -->
    <p class="txt-lg text-gray-800" > It's curently {{ date('h:i A') }} </p>

@endsection
