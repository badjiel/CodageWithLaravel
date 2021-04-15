@extends('base')

@section('content')

@section('title', 'About Us |' .config('app.name') )

    <img src="/images/63473574.jfif" alt="Quebec Flag">
    <h1> About Us </h1>

    <p> Built with &hearts; by THE NET TEACHERS </p>
    <p><a href="{{ route('home')}}">Return to page home </a></p>


@endsection

