@extends('layouts.app')
@section('content')

<div class="content">
    <div class="carousel">
        <div class="item">
            @foreach ($randScreenshots as $value)
                <img class="carouselImage" src="{{ URL::to('/') }}/screenshots/{{ $value }}" alt="Model Image">
            @endforeach
        </div>
    </div>

    <div style="margin-left: 7%; margin-right: 5%; column-count: 2;" class="items">
        @foreach ($screenshots as $value)
            <img class="carouselImage" src="{{ URL::to('/') }}/screenshots/{{ $value }}" alt="Model Image">
        @endforeach
    </div>
</div>

@endsection
