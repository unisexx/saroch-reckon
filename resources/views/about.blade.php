@extends('layouts.app')

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item active">@lang('About Us')</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->

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
