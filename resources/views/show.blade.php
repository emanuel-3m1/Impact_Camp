@extends('layouts.app')

@section('content')
<div class="container">

    <div>
        <h3>Camp Zone {{$campZone->nickname}} </h3>
        @if (!empty($campZone->campsites) && $campZone->campsites->isNotEmpty())
            <div class="mt-5"><h2><strong>Available Campsites</strong></h2></div>
            @foreach ($campZone->campsites as $campsite)
                <div>{{$campsite->id}}</div>
            @endforeach
        @else
            No camp sites available
        @endif
    </div>

</div>
@endsection
