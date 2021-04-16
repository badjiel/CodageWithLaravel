@extends('base')

@section('content')

@section('title', 'About Us |' .config('app.name') )
    <!-- Insertion image -->
    <img src="{{asset('/images/63473574.jfif')}}" alt="Quebec Flag">
    <h1 class=" mb-5 text-gray-700"> About Us </h1>

    <h2 > Built with &hearts; by THE NET TEACHERS </h2>
    <p><a href="{{ route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Return to page home </a></p>


@endsection

