@extends('layouts.app')

@section('content')


<!-- Testimonials 2 -->
<section class="fdb-block">
    <div class="container">
        <div class="fdb-box-aboutus">
            <h2>{{ $about->title }}</h2>
            {!! $about->body !!}
        </div>
    </div>
    <div id="product"></div>
</section>
<section class="fdb-block" style="background-image: url({{ asset('app-assets/imgs/shapes/6.svg') }});">
    <div class="container">
        <div class="fdb-box-aboutus">
            <h2>{{ $about->title2 }}</h2>
            {!! $about->body2 !!}
        </div>
    </div>
    <div id="product"></div>
</section>


@endsection
