@php
    $hilights = \App\Hilight::where('status', 1)->orderBy('order', 'asc')->get();
@endphp

{{-- Hilight --}}
<section class="fdb-block" style="padding-top:70px;">
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
                    @if($hilight->url) <a href="{{ url($hilight->url) }}"> @endif
                        <img class="w-100" src="{{ asset('storage/'.$hilight->image) }}">
                    @if($hilight->url) </a> @endif
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
</section>
{{-- Hilight --}}