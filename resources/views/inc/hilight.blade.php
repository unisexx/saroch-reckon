@php
    $hilights = \App\Hilight::where('status', 1)->orderBy('order', 'asc')->get();
@endphp

{{-- Hilight --}}
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        @foreach( $hilights as $key => $hilight )
            <li data-target="#demo" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        @foreach( $hilights as $key => $hilight )
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img class="img-fluid" src="{{ asset('storage/'.$hilight->image) }}" alt="">
            </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
{{-- Hilight --}}