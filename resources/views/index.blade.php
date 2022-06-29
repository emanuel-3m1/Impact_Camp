@extends('layouts.app')

@section('content')
    <div class="container">
        @if(auth()->check())

            <div><h1>Hello {{ auth()->user()->name }}</h1></div>

        @else
            <a href="{{ route('login') }}">Please Login</a>
        @endif

        <div class="row justify-content-center">
            <iframe src="https://www.google.com/maps/d/embed?mid=1Z_0bhno8wteqR3rtpeQKFT1HzOohgAU&ehbc=2E312F"
                    width="640"
                    height="480"></iframe>
        </div>

        <h1>Select your Camp Zone </h1>
        @if(!empty('campzones'))
            @foreach($campzones as $campzone)
                <div><a href="{{ route('campzone.show',$campzone->id) }}">Camp Zone {{ $campzone->title}}</a></div>
            @endforeach
        @endif
    </div>
@endsection
